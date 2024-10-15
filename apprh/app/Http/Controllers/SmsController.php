<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MessagesRecus;
use App\Models\Message;
use App\Models\User;
use Wavey\Sweetalert\Sweetalert;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Services\SmsServices;

class SmsController extends Controller
{
    public function chat()
    {
    
        if(Auth::user()== null){
            return redirect()->route('welcome');
        }

        else{
            if((Auth::user()->admin == 'Pas Admin') && (Auth::user()->permission == 'Responsable Recrutement') ){

                $utilisateur= User::where('idadmin', '=', Auth::user()->idadmin)->where('permission','=','Responsable Recrutement')->first();
        
              
                $getCountSmsRead = DB::table('messages')->where('lu', '=', 'Non lu')->where('user_id','=',Auth::user()->id)->where('idadmin','=',$utilisateur->idadmin)->get();
                $recup = User::where('id','=',Auth::user()->id)->first();
                $recups=User::where('idadmin','=',Auth::user()->id)->first();
                $messageUtilisateur=MessagesRecus::where('user_id','=',Auth::user()->id)->where('idadmin','=',$recup->idadmin)->orderBy('id', 'desc')->get();
                $utilisateurs= User::where('idadmin', '=', Auth::user()->id)->where('permission','=','Responsable Recrutement')->first();
                $cherche=User::where('id', '=', Auth::user()->id)->first();//utilisateur connecté//
                $message = Message::where('user_id', '=', Auth::user()->id)->orderBy('id', 'desc')->get();

              ;
            return view('chat',compact('message','cherche','messageUtilisateur','getCountSmsRead'));
            }elseif((Auth::user()->admin == 'Admin') && (Auth::user()->creationpermission == 'oui') ){
              $utilisateurun='';
              $utilisateurdeux='';
                $getCountSmsRead = DB::table('messages_recuses')->where('lu', '=', 'Non lu')->where('idadmin','=',Auth::user()->id)->get();
                $utilisateurs= User::where('idadmin', '=', Auth::user()->id)->get();
            
              $existes = $utilisateurs->contains(function ($utilisateur) {
                $utilisateur->where('permission','=','Responsable Recrutement')->first();
                return $utilisateur;
            });
           



            if( $existes){
                $utilisateurun= User::where('idadmin', '=', Auth::user()->id)->where('permission','=','Responsable Recrutement')->first();
             
            }

            $recup = User::where('id','=',Auth::user()->id)->first();
            if ($utilisateurun && isset($utilisateurun->idadmin)) {
                $messageUtilisateur=MessagesRecus::where('user_id','=',$utilisateurun->id)->where('idadmin','=',Auth::user()->id)->orderBy('id', 'desc')->get();
            } else {
                Sweetalert::success('', 'Pas de responsable existant...');
                return redirect()->route('dashboard');
            }
           
            $cherche=User::where('id', '=', Auth::user()->id)->first();

            $message = Message::where('user_id', '=', $utilisateurun->id)->orderBy('id', 'desc')->get();
            $utilisateur= User::where('idadmin', '=', Auth::user()->id)->first();
            $lacouleur = Message::where('idadmin', '=', $cherche->id)->first();
                


            return view('chat', compact('message','cherche','utilisateur','messageUtilisateur','utilisateurun','getCountSmsRead','existes'));
            }elseif((Auth::user()->admin == 'Pas Admin') && (Auth::user()->creationpermission == 'non')){
                Sweetalert::success('pour avoir accès å cette page...', 'Vous devez creer des utilisateurs');
                return redirect()->route('dashboard');
            }elseif(((Auth::user()->admin == 'Admin') && (Auth::user()->creationpermission == 'non'))){
                Sweetalert::success('pour avoir accès å cette page...', 'Vous devez creer des utilisateurs');
                return redirect()->route('dashboard');
            }
        }
      
}

    public function sendMessage(Request $request)
    {
        $message = Message::create([
            'user_id' => auth()->id(),
            'message' => $request->message,
        ]);

        broadcast(new MessageSent($message))->toOthers();

        return ['status' => 'Message Sent!'];
    }

    //envoi message aux utilisateurs par admin
    public function envoimessagesauxutilisateurs(Request $request )
    {
      if (Auth::user() === null) {


          return view('welcome');
      } elseif(Auth::user()->admin == 'Admin') {

    $cherche=User::where('id', '=', Auth::user()->id)->first();

       $utilisateur= User::where('idadmin', '=', Auth::user()->id)->where('permission','=','Responsable Recrutement')->first();
$utilisateurId=$utilisateur->id;
$message = Message::where('user_id', '=', $utilisateurId)->get();


Message::create([
    'titre' => $request->titre,
    'message' => $request->message,
    'user_id' => $utilisateurId,
    'idadmin'=>$cherche->id,
    'lu'=>'Non lu',
    'non lu'=>'Non lu',
    'couleur'=>'bg-primary float-end'
]);
Sweetalert::success('avec success', 'Message envoyé');
          return redirect()->route('discussionadminresporecrutement');
      }
    }


    //envoi message admin

    public function envoimessageaAdmin(Request $request){
        if(Auth::user() == null){
            return redirect()->route();
        }elseif((Auth::user()->admin == 'Pas Admin') && Auth::user()->permission == 'Responsable Recrutement'){

            $recup = User::where('id','=',Auth::user()->id)->first();
            //on recupere l'id de celui qui est connecté et on l'affecte å la variable

            MessagesRecus::create([
                'titre' => $request->titre,
                'message' => $request->message,
                'user_id' => $recup->id,
                'idadmin'=>$recup->idadmin,
                'lu'=>'Non lu',
                'non lu'=>'Non lu',
                'couleur'=>'bg-success float-start'
            ]);
            Sweetalert::success('avec success', 'Message envoyé');


            return redirect()->route('chat');
        }
    }

    //deletesmsbyadmin
    public function deletesmsbyadmin(Request $request){
        $prends = Message::find($request->check);
        if ($prends === null) {
            Sweetalert::success('...', 'Aucun elements selectiones');
            return redirect()->route('chat');
        }
        if (count($prends) > 0) {
            foreach ($prends as $enleves) {
                $enleves->delete();
                Sweetalert::success('avec succes', 'Elements supprimés');

            }
            return redirect()->route('chat');
    }

}


 //deletesmsbyadmindeux
 public function deletesmsbyadmindeux(Request $request){
   
    $prends = MessagesRecus::find($request->check);
    if ($prends === null) {
        Sweetalert::success('...', 'Aucun elements selectiones');
        return redirect()->route('discussionadminresporecrutement');
    }
    if (count($prends) > 0) {
        foreach ($prends as $enleves) {
            $enleves->delete();
            Sweetalert::success('avec succes', 'Elements supprimés');

        }
        return redirect()->route('discussionadminresporecrutement');
}

}

// update sms recus par admin

public function updatesmsreceivebyadmin(){
    $utilisateur= User::where('idadmin', '=', Auth::user()->id)->where('permission','=','Responsable Recrutement')->first();
   $updatesmsreceiveadmin= MessagesRecus::where('user_id','=',$utilisateur->id)->where('idadmin','=',$utilisateur->idadmin)->where('lu','=','Non lu')->get();
   foreach ($updatesmsreceiveadmin as $updats) {
    $updats->update([
        'lu'=>'lu'
    ]);


}
return response()->json('');
}


//
public function updatesmssendbyadmin(){
    $utilisateur= User::where('idadmin', '=', Auth::user()->idadmin)->where('permission','=','Responsable Recrutement')->first();

   $updatesmsreceiveadmin= Message::where('user_id','=',$utilisateur->id)->where('idadmin','=',$utilisateur->idadmin)->where('lu','=','Non lu')->get();
   foreach ($updatesmsreceiveadmin as $updats) {
    $updats->update([
        'lu'=>'lu'
    ]);


}
return response()->json('');
}
}
