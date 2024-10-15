<?php

namespace App\Http\Controllers;

use App\Models\Candidat;
use App\Models\User;
use Illuminate\Http\Request;
use Wavey\Sweetalert\Sweetalert;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    

      //index
      public function index()
      {
        if (Auth::user() === null) {


            return view('welcome');
        } else {


            return redirect()->route('dashboard');
        }
      }



  //dashboard
  public function dashboard()
  {
    if (Auth::user() == null) {


        return redirect()->route('welcome');
    } elseif((Auth::user()->owner === 'oui') ) {
      $candidats = Candidat::where('user_id','=',Auth::user()->id)->orderBy('id', 'desc')->with('offreemploi')->paginate(2);
      $exists = $candidats->contains(function ($candidat) {
        return $candidat->selectionne === 'non';
    });
    $existsdeux = $candidats->contains(function ($candidat) {
      return $candidat->reponsesondage === 'oui';
  });
  $users = User::where('id','=',Auth::user()->id)->first();
  $usersociete = $users->societe;
  $getusers = User::where('societe','=',$usersociete)->get();
  $compteurs = $getusers->contains(function ($getuser) {
    return $getuser->nouveau === 'oui';
});


  $getCountSmsRead = DB::table('messages_recuses')->where('lu', '=', 'Non lu')->get();
  $users = User::where('id','=',Auth::user()->id)->first();
  $usersociete = $users->societe;
  $compteur = user::where('societe','=',$usersociete )->get();
 
        return view('dashboard',compact('exists','existsdeux','getCountSmsRead','users'));
    }

    elseif((Auth::user()->owner === 'non') && (Auth::user()->permission === 'Responsable Recrutement')){
 
        Sweetalert::success('...', 'Vous n\'avez pas accès å cette page ');
         return redirect()->route('espaceemploye');
    
     
    }
    elseif((Auth::user()->admin == 'Pas Admin')   && (Auth::user()->role !== 'Responsable Recrutement') && (Auth::user()->role !== 'Responsable Gestion des Performances') && (Auth::user()->role !== 'Responsable Gestion de la Paie') && (Auth::user()->role !== 'Responsable Gestion des Conges et des Absences') ){
 
      Sweetalert::success('...', 'Vous n\'avez pas accès å cette page ');
       return redirect()->route('espaceemploye');
  
   
  }
  }

 

    
}
