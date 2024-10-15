<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\AvantagesCandidat;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\LesMissionDesCandidats;
use App\Models\CompteurMissionCandidat;
use App\Models\CompteurAvantageCandidat;

class CompleteInfosProfilUserController extends Controller
{
       //
       public function completeinfosprofiluser($id)
       {
         if (Auth::user() === null) {
 
 
             return view('welcome');
         } else {
          $montant='';
          
          $lavantage='';
          $mission1='';
          $mission2='';
          $mission3='';
          $mission4='';
          $mission5='';
          $mission6='';
          $mission7='';
          $mission8='';
          $mission9='';
          $mission10='';
        
          $avantage1='';
          $avantage1='';
          $avantage2='';
          $avantage3='';
          $avantage4='';
          $avantage5='';
          $avantage6='';
          $avantage7='';
          $avantage8='';
          $avantage9='';
          $avantage10='';
         
 $user = User::find($id);
 $first = DB::table('compteur_avantage_candidats')->where('user_id', '=', Auth::user()->id)->oldest('id')->first();
 $firstMission = DB::table('les_mission_des_candidats')->where('user_id', '=', Auth::user()->id)->oldest('id')->first();

 if($first ){
 
  $recup = CompteurMissionCandidat::where('user_id','=',Auth::user()->id)->first();
  
 
  $recups = CompteurAvantageCandidat::where('user_id','=',Auth::user()->id)->first();
  if($recup->status == 10){
   $montant ='Configurez les missions...vous pouvez en ajouter' .' '.$recup->status .' '.'maximum';
  }elseif(($recup->status < 10) && ($recup->status > 0) ){
   $montant ='Vous pouvez encore en ajouter' .' '.$recup->status;
  }
  elseif($recup ===0){
   $montant ='';
  }

 

  if($recups->status == 10){
   $lavantage ='Configurez les avantages...vous pouvez en ajouter' .' '.$recups->status .' '.'maximum';
  }elseif(($recups->status < 10) && ($recups->status > 0) ){
   $lavantage ='Vous pouvez encore en ajouter' .' '.$recups->status;
  }
  elseif($recups ===0){
   $lavantage ='';
  }
  //$candidats = Candidat::where('user_id','=',Auth::user()->id)->orderBy('id', 'desc')->paginate(4);


$status  = LesMissionDesCandidats::where('user_id','=',Auth::user()->id)->first();
$statuss  = AvantagesCandidat::where('user_id','=',Auth::user()->id)->first();


if($status->mission1 == 'non'){
  $mission1='';
}elseif($status->mission1 !== 'non'){
$mission1=$status->mission1;
}
if($status->mission2 == 'non'){
$mission2='';
}elseif($status->mission2 !== 'non'){
$mission2=$status->mission2;
}
if($status->mission3 == 'non'){
$mission3='';
}elseif($status->mission3 !== 'non'){
$mission3=$status->mission3;
}
if($status->mission4 == 'non'){
$mission4='';
}elseif($status->mission4 !== 'non'){
$mission4=$status->mission4;
}
if($status->mission5 == 'non'){
$mission5='';
}elseif($status->mission5 !== 'non'){
$mission5=$status->mission5;
}
if($status->mission6 == 'non'){
$mission6='';
}elseif($status->mission6 !== 'non'){
$mission6=$status->mission6;
}
if($status->mission7 == 'non'){
$mission7='';
}elseif($status->mission7 !== 'non'){
$mission7=$status->mission7;
}
if($status->mission8 == 'non'){
$mission8='';
}elseif($status->mission8 !== 'non'){
$mission8=$status->mission8;
}
if($status->mission9 == 'non'){
$mission9='';
}elseif($status->mission9 !== 'non'){
$mission9=$status->mission9;
}
if($status->mission10 == 'non'){
$mission10='';
}elseif($status->mission10 !== 'non'){
$mission10=$status->mission10;
}

//........//

if($statuss->avantage1 == 'non'){
$avantage1='';
}elseif($statuss->avantage1 !== 'non'){
$avantage1=$statuss->avantage1;
}
if($statuss->avantage2 == 'non'){
$avantage2='';
}elseif($statuss->avantage2 !== 'non'){
$avantage2=$statuss->avantage2;
}
if($statuss->avantage3 == 'non'){
$avantage3='';
}elseif($statuss->avantage3 !== 'non'){
$avantage3=$statuss->avantage3;
}
if($statuss->avantage4 == 'non'){
$avantage4='';
}elseif($statuss->avantage4 !== 'non'){
$avantage4=$statuss->avantage4;
}
if($statuss->avantage5 == 'non'){
$avantage5='';
}elseif($statuss->avantage5 !== 'non'){
$avantage5=$statuss->avantage5;
}
if($statuss->avantage6 == 'non'){
$avantage6='';
}elseif($statuss->avantage6 !== 'non'){
$avantage6=$statuss->avantage6;
}
if($statuss->avantage7 == 'non'){
$avantage7='';
}elseif($statuss->avantage7 !== 'non'){
$avantage7=$statuss->avantage7;
}
if($statuss->avantage8 == 'non'){
$avantage8='';
}elseif($statuss->avantage8 !== 'non'){
$avantage8=$statuss->avantage8;
}
if($statuss->avantage9 == 'non'){
$avantage9='';
}elseif($statuss->avantage9 !== 'non'){
$avantage9=$statuss->avantage9;
}
if($statuss->avantage10 == 'non'){
$avantage10='';
}elseif($statuss->avantage10 !== 'non'){
$avantage10=$statuss->avantage10;
}
  

    return view('completeinfosprofiluser',compact('user','recup','recups','montant','mission1','mission2','mission3','mission4','mission5','mission6','mission7','mission8','mission9','mission10','lavantage','avantage1','avantage2','avantage3','avantage4','avantage5','avantage6','avantage7','avantage8','avantage9','avantage10'));
 }elseif(!$first){

    CompteurMissionCandidat::create([
        'status'=>10,
        'user_id'=>Auth::user()->id,
        'email'=>Auth::user()->email

    
      ]);
      CompteurAvantageCandidat::create([
        'status'=>10 ,
        'user_id'=>Auth::user()->id,
        'email'=>Auth::user()->email
 
      ]);

      LesMissionDesCandidats::create([
        'mission1'=>'non',
        'mission2'=>'non',
        'mission3'=>'non',
        'mission4'=>'non',
        'mission5'=>'non',
        'mission6'=>'non',
        'mission7'=>'non',
        'mission8'=>'non',
        'mission9'=>'non',
        'mission10'=>'non',
        'user_id'=>Auth::user()->id,
        'email'=>Auth::user()->email
      ]);

      AvantagesCandidat::create([
        'avantage1'=>'non',
        'avantage2'=>'non',
        'avantage3'=>'non',
        'avantage4'=>'non',
        'avantage5'=>'non',
        'avantage6'=>'non',
        'avantage7'=>'non',
        'avantage8'=>'non',
        'avantage9'=>'non',
        'avantage10'=>'non',
        'user_id'=>Auth::user()->id,
        'email'=>Auth::user()->email
      ]);


      //$candidats = Candidat::where('user_id','=',Auth::user()->id)->orderBy('id', 'desc')->paginate(4);
      $recup = CompteurMissionCandidat::where('user_id','=',Auth::user()->id)->first();
      $recups = CompteurAvantageCandidat::where('user_id','=',Auth::user()->id)->first();

      if($recup->status == 10){
       $montant ='Configurez les missions...vous pouvez en ajouter' .' '.$recup->status .' '.'maximum';
      }elseif(($recup->status < 10) && ($recup->status > 0) ){
       $montant ='Vous pouvez encore en ajouter' .' '.$recup->status;
      }
      elseif($recup ===0){
       $montant ='';
      }
    
     
    
      if($recups->status == 10){
       $lavantage ='Configurez les avantages...vous pouvez en ajouter' .' '.$recups->status .' '.'maximum';
      }elseif(($recups->status < 10) && ($recups->status > 0) ){
       $lavantage ='Vous pouvez encore en ajouter' .' '.$recups->status;
      }
      elseif($recups ===0){
       $lavantage ='';
      }
    
    $status  = LesMissionDesCandidats::where('user_id','=',Auth::user()->id)->first();
    $statuss  = AvantagesCandidat::where('user_id','=',Auth::user()->id)->first();
    
    
    if($status->mission1 == 'non'){
      $mission1='';
    }elseif($status->mission1 !== 'non'){
    $mission1=$status->mission1;
    }
    if($status->mission2 == 'non'){
    $mission2='';
    }elseif($status->mission2 !== 'non'){
    $mission2=$status->mission2;
    }
    if($status->mission3 == 'non'){
    $mission3='';
    }elseif($status->mission3 !== 'non'){
    $mission3=$status->mission3;
    }
    if($status->mission4 == 'non'){
    $mission4='';
    }elseif($status->mission4 !== 'non'){
    $mission4=$status->mission4;
    }
    if($status->mission5 == 'non'){
    $mission5='';
    }elseif($status->mission5 !== 'non'){
    $mission5=$status->mission5;
    }
    if($status->mission6 == 'non'){
    $mission6='';
    }elseif($status->mission6 !== 'non'){
    $mission6=$status->mission6;
    }
    if($status->mission7 == 'non'){
    $mission7='';
    }elseif($status->mission7 !== 'non'){
    $mission7=$status->mission7;
    }
    if($status->mission8 == 'non'){
    $mission8='';
    }elseif($status->mission8 !== 'non'){
    $mission8=$status->mission8;
    }
    if($status->mission9 == 'non'){
    $mission9='';
    }elseif($status->mission9 !== 'non'){
    $mission9=$status->mission9;
    }
    if($status->mission10 == 'non'){
    $mission10='';
    }elseif($status->mission10 !== 'non'){
    $mission10=$status->mission10;
    }
    
    //........//
    
    if($statuss->avantage1 == 'non'){
    $avantage1='';
    }elseif($statuss->avantage1 !== 'non'){
    $avantage1=$statuss->avantage1;
    }
    if($statuss->avantage2 == 'non'){
    $avantage2='';
    }elseif($statuss->avantage2 !== 'non'){
    $avantage2=$statuss->avantage2;
    }
    if($statuss->avantage3 == 'non'){
    $avantage3='';
    }elseif($statuss->avantage3 !== 'non'){
    $avantage3=$statuss->avantage3;
    }
    if($statuss->avantage4 == 'non'){
    $avantage4='';
    }elseif($statuss->avantage4 !== 'non'){
    $avantage4=$statuss->avantage4;
    }
    if($statuss->avantage5 == 'non'){
    $avantage5='';
    }elseif($statuss->avantage5 !== 'non'){
    $avantage5=$statuss->avantage5;
    }
    if($statuss->avantage6 == 'non'){
    $avantage6='';
    }elseif($statuss->avantage6 !== 'non'){
    $avantage6=$statuss->avantage6;
    }
    if($statuss->avantage7 == 'non'){
    $avantage7='';
    }elseif($statuss->avantage7 !== 'non'){
    $avantage7=$statuss->avantage7;
    }
    if($statuss->avantage8 == 'non'){
    $avantage8='';
    }elseif($statuss->avantage8 !== 'non'){
    $avantage8=$statuss->avantage8;
    }
    if($statuss->avantage9 == 'non'){
    $avantage9='';
    }elseif($statuss->avantage9 !== 'non'){
    $avantage9=$statuss->avantage9;
    }
    if($statuss->avantage10 == 'non'){
    $avantage10='';
    }elseif($statuss->avantage10 !== 'non'){
    $avantage10=$statuss->avantage10;
    }
    
      return view('completeinfosprofiluser',compact('user','recup','recups','montant','mission1','mission2','mission3','mission4','mission5','mission6','mission7','mission8','mission9','mission10','lavantage','avantage1','avantage2','avantage3','avantage4','avantage5','avantage6','avantage7','avantage8','avantage9','avantage10'));
 }


           
         }
       }


       public function completeinfosprofiluserUpdateMission()
       {
         if (Auth::user() === null) {
 
 
             return view('welcome');
         } else {
 
                 

        
 
             return redirect()->route('completeinfosprofiluser',compact('montant','mission1','mission2','mission3','mission4','mission5','mission6','mission7','mission8','mission9','mission10','lavantage','avantage1','avantage2','avantage3','avantage4','avantage5','avantage6','avantage7','avantage8','avantage9','avantage10'));
         }
       }





}
