<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Message;
use App\Models\MessagesRecus;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class DiscussAdminRespoRecrutController extends Controller
{
    public function discussionadminresporecrutement()
    {
      
        if(Auth::user()== null){
            return redirect()->route('welcome');
        }

        else{
           if((Auth::user()->admin == 'Admin') && (Auth::user()->creationpermission == 'oui')){
            
                $getCountSmsRead = DB::table('messages_recuses')->where('lu', '=', 'Non lu')->where('idadmin','=',Auth::user()->id)->get();
            
                $utilisateurun= User::where('idadmin', '=', Auth::user()->id)->where('permission','=','Responsable Recrutement')->first();

            $recup = User::where('id','=',Auth::user()->id)->first();
            $messageUtilisateur=MessagesRecus::where('user_id','=',$utilisateurun->id)->where('idadmin','=',Auth::user()->id)->orderBy('id', 'desc')->get();
            $cherche=User::where('id', '=', Auth::user()->id)->first();

            $message = Message::where('user_id', '=', $utilisateurun->id)->orderBy('id', 'desc')->get();
            $utilisateur= User::where('idadmin', '=', Auth::user()->id)->first();
            $lacouleur = Message::where('idadmin', '=', $cherche->id)->first();
           
            $updatesmsreceiveadmin= MessagesRecus::where('user_id','=',$utilisateurun->id)->where('idadmin','=',$utilisateurun->idadmin)->where('lu','=','Non lu')->get();
            foreach ($updatesmsreceiveadmin as $updats) {
             $updats->update([
                 'lu'=>'lu'
             ]);
            }

            return view('discussionadminresporecrutement', compact('message','cherche','utilisateur','messageUtilisateur','utilisateurun','getCountSmsRead'));
            }
        }
    }


    ///

    public function receptsmsadminbyresporecrutement()
    {
      
        if(Auth::user()== null){
            return redirect()->route('welcome');
        }

        else{
           if((Auth::user()->admin == 'Pas Admin') && (Auth::user()->permission == 'Responsable Recrutement')){
            
            $utilisateur= User::where('idadmin', '=', Auth::user()->idadmin)->where('permission','=','Responsable Recrutement')->first();
        
              
            $getCountSmsRead = DB::table('messages')->where('lu', '=', 'Non lu')->where('user_id','=',Auth::user()->id)->where('idadmin','=',$utilisateur->idadmin)->get();
            $recup = User::where('id','=',Auth::user()->id)->first();
            $recups=User::where('idadmin','=',Auth::user()->id)->first();
            $messageUtilisateur=MessagesRecus::where('user_id','=',Auth::user()->id)->where('idadmin','=',$recup->idadmin)->orderBy('id', 'desc')->get();
            $utilisateurs= User::where('idadmin', '=', Auth::user()->id)->where('permission','=','Responsable Recrutement')->first();
            $cherche=User::where('id', '=', Auth::user()->id)->first();//utilisateur connecté//
            $message = Message::where('user_id', '=', Auth::user()->id)->orderBy('id', 'desc')->get();
            $updatesmsreceiveadmin= Message::where('user_id','=',$utilisateur->id)->where('idadmin','=',$utilisateur->idadmin)->where('lu','=','Non lu')->get();
            foreach ($updatesmsreceiveadmin as $updats) {
             $updats->update([
                 'lu'=>'lu'
             ]);
         
         
         }

            return view('receptsmsadminbyresporecrutement', compact('message','cherche','utilisateur','messageUtilisateur','getCountSmsRead'));
            }
        }
    }
}
