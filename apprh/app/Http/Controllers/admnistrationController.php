<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class admnistrationController extends Controller
{
    //admnistration
    public function gestionadministrative()
    {
      if (Auth::user() === null) {
  
  
          return redirect()->route('welcome');
      } else {
  
  
          return view('gestionadministrative');
      }
    }
}
