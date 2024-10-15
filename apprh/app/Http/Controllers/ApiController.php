<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Employe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class ApiController extends Controller
{


    public function registered(Request $request){
        $recup = $request->all();
       
         $valid = Validator::make($recup,[
             'name' =>[ 'required | string'],
              'email' => ['required', 'email', 'max:255', 'unique:'.User::class],
              'password' => ['required', 'confirmed', Rules\Password::defaults()],
         ]);
 
         if($valid->fails()){
             return response()->json([
            'message'=>'Données invalides...'
             ]);
         }
 
         $user = User::create([
             'name'=>$request->name,
              'email'=>$request->email,
             'password' => Hash::make($request->password),
            
             
         ]);
         $accessToken = $user->createToken('authToken')->plainTextToken;
         $user->save();
         return response()->json([
             'message'=>'Enregistrement reussi...',
             'access_token' => $accessToken
         ]);
     }
    public function lesusers(){
       

        $lesusers = Employe::all();
       
        return response()->json($lesusers);
    }
}
