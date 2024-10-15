<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Wavey\Sweetalert\Sweetalert;
use Illuminate\Support\Facades\Auth;

class GestionPaieController extends Controller
{
    //gestion paie
    public function gestionpaie()
    {
      if (Auth::user() === null) {
  
  
          return redirect()->route('welcome');
      }
      elseif((Auth::user()->owner === 'non') && (Auth::user()->permission === 'Responsable Recrutement')){
 
        Sweetalert::success('...', 'Vous n\'avez pas accès å cette page ');
      return redirect()->route('recrutement');
       }
      else {
  
  
          return view('gestionpaie');
      }
    }
}
