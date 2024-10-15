<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EspaceEmployeController extends Controller
{
    //

    public function espaceemploye()
    {
      if (Auth::user() === null) {


          return view('welcome');
      } else {


          return view('espaceemploye');
      }
    }
}
