<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FormulaireCandidature extends Controller
{
    public function formulairecandidature($id)
    {
      if (Auth::user() === null) {
  
  
          return redirect()->route('welcome');
      } else {
  
     $offres = OffreEmploi::find($id);
          return view('formulairecandidature',compact('offres'));
      }
    }

    
}
