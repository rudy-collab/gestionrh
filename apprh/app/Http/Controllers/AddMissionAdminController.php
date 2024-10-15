<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\LesEmploye;
use Illuminate\Http\Request;
use Wavey\Sweetalert\Sweetalert;
use App\Models\AvantagesCandidat;
use App\Models\InfosContratCandidat;
use Illuminate\Support\Facades\Auth;
use App\Models\LesMissionDesCandidats;
use App\Models\CompteurMissionCandidat;
use App\Models\CompteurAvantageCandidat;

class AddMissionAdminController extends Controller
{
    //

    public function addmissionadmin(Request $request, $id)
    {
      if (Auth::user() === null) {
  
  
          return redirect()->route('welcome');
      } else {
         
         

$upds = CompteurMissionCandidat::where('user_id','=',Auth::user()->id)->first();

if($upds->status > 0){
$upds->status-= 1;
$upds->save();

}elseif($upds->status === 0){

}
     
     $status  = LesMissionDesCandidats::where('user_id','=',Auth::user()->id)->first();
 

     if ($status->mission1 == 'non') {
      // La colonne status1 est null
     $status->update([
      'mission1'=> $request->mission,
     ]);
  } elseif(($status->mission1 !== 'non') && ($status->mission2 =='non')) {
     $status->update([
          'mission2'=> $request->mission
         ]);
  }
  elseif(($status->mission1 !=='non') && ($status->mission2 !=='non') && ($status->mission3 =='non')) {
      $status->update([
          'mission3'=> $request->mission
         ]);
  }
  elseif(($status->mission1 !=='non') && ($status->mission2 !=='non') && ($status->mission3 !=='non') && ($status->mission4 =='non')) {
      $status->update([
          'mission4'=> $request->mission
         ]);
  }
  elseif(($status->mission1 !=='non') && ($status->mission2 !=='non') && ($status->mission3 !=='non') && ($status->mission4 !=='non') && ($status->mission5 =='non')) {
      $status->update([
          'mission5'=> $request->mission
         ]);
  }
  elseif(($status->mission1 !=='non') && ($status->mission2 !=='non') && ($status->mission3 !=='non') && ($status->mission4 !=='non') && ($status->mission5 !=='non') && ($status->mission6 =='non')) {
      $status->update([
          'mission6'=> $request->mission
         ]);
  }
  elseif(($status->mission1 !=='non') && ($status->mission2 !=='non') && ($status->mission3 !=='non') && ($status->mission4 !=='non') && ($status->mission5 !=='non') && ($status->mission6 !=='non') && ($status->mission7 =='non')) {
      $status->update([
          'mission7'=> $request->mission
         ]);
  }
  elseif(($status->mission1 !=='non') && ($status->mission2 !=='non') && ($status->mission3 !=='non') && ($status->mission4 !=='non')&& ($status->mission5 !=='non') && ($status->mission6 !=='non') && ($status->mission7 !=='non') && ($status->mission8 =='non')) {
      $status->update([
          'mission8'=> $request->mission
         ]);
  }
  elseif(($status->mission1 !=='non') && ($status->mission2 !=='non') && ($status->mission3 !=='non') && ($status->mission4 !=='non') && ($status->mission5 !=='non') && ($status->mission6 !=='non') && ($status->mission7 !=='non') && ($status->mission8 !=='non') && ($status->mission9 =='non')) {
      $status->update([
          'mission9'=> $request->mission
         ]);
  }
  elseif (($status->mission1 !=='non') && ($status->mission2 !=='non') && ($status->mission3 !=='non') && ($status->mission4 !=='non') && ($status->mission5 !=='non') && ($status->mission6 !=='non') && ($status->mission7 !=='non') && ($status->mission8 !=='non') && ($status->mission9 !=='non') && ($status->mission10 =='non')) {
      $status->update([
          'mission10'=> $request->mission
         ]);
  }
     
          return redirect()->route('completeinfosprofiluser',$id);
      }
    }




public function addavantageadmin(Request $request, $id)
{
  if (Auth::user() === null) {


      return redirect()->route('welcome');
  } else {
     
     

$updss = CompteurAvantageCandidat::where('user_id','=',Auth::user()->id)->first();

if($updss->status > 0){
$updss->status-= 1;
$updss->save();

}elseif($updss->status === 0){

}
$avantages  = AvantagesCandidat::where('user_id','=',Auth::user()->id)->first();


 if ($avantages->avantage1 == 'non') {
  // La colonne status1 est null 
 $avantages->update([
  'avantage1'=> $request->avantages,
 ]);
} elseif(($avantages->avantages1 !== 'non') && ($avantages->avantage2 =='non')) {
 $avantages->update([
      'avantage2'=> $request->avantages
     ]);
}
elseif(($avantages->avantage1 !=='non') && ($avantages->avantage2 !=='non') && ($avantages->avantage3 =='non')) {
  $avantages->update([
      'avantage3'=> $request->avantages
     ]);
}
elseif(($avantages->avantage1 !=='non') && ($avantages->avantage2 !=='non') && ($avantages->avantage3 !=='non') && ($avantages->avantage4 =='non')) {
  $avantages->update([
      'avantage4'=> $request->avantages
     ]);
}
elseif(($avantages->avantage1 !=='non') && ($avantages->avantage2 !=='non') && ($avantages->avantage3 !=='non') && ($avantages->avantage4 !=='non') && ($avantages->avantage5 =='non')) {
  $avantages->update([
      'avantage5'=> $request->avantages
     ]);
}
elseif(($avantages->avantage1 !=='non') && ($avantages->avantage2 !=='non') && ($avantages->avantage3 !=='non') && ($avantages->avantage4 !=='non') && ($avantages->avantage5 !=='non') && ($avantages->avantage6 =='non')) {
  $avantages->update([
      'avantage6'=> $request->avantages
     ]);
}
elseif(($avantages->avantage1 !=='non') && ($avantages->avantage2 !=='non') && ($avantages->avantage3 !=='non') && ($avantages->avantage4 !=='non') && ($avatnages->avantage5 !=='non') && ($avantages->avantage6 !=='non') && ($avantages->avantage7 =='non')) {
  $avantages->update([
      'avantage7'=> $request->avantages
     ]);
}
elseif(($avantages->avantage1 !=='non') && ($avantages->avantage2 !=='non') && ($avantages->avantage3 !=='non') && ($avantages->avantage4 !=='non')&& ($avantages->avantage5 !=='non') && ($avantages->avanatge6 !=='non') && ($avantages->avantage7 !=='non') && ($avantages->avantage8 =='non')) {
  $avantages->update([
      'avantage8'=> $request->avantages
     ]);
}
elseif(($avantages->avantage1 !=='non') && ($avantages->avantage2 !=='non') && ($avantages->avantage3 !=='non') && ($avantages->avantage4 !=='non') && ($avantages->avantage5 !=='non') && ($avantages->avantage6 !=='non') && ($avantages->avantage7 !=='non') && ($avantages->avantage8 !=='non') && ($avantages->avantage9 =='non')) {
  $avantages->update([
      'avantage9'=> $request->avantages
     ]);
}
elseif (($avanatges->avantage1 !=='non') && ($avanatges->avanatge2 !=='non') && ($avantages->avanatge3 !=='non') && ($avantages->avantage4 !=='non') && ($avantages->avantage5 !=='non') && ($avantages->avantage6 !=='non') && ($avantages->avantage7 !=='non') && ($avanatges->avanatge8 !=='non') && ($avanatges->avantage9 !=='non') && ($avantages->avanatge10 =='non')) {
  $avantages->update([
      'avanatge10'=> $request->avantages
     ]);
}

      return redirect()->route('completeinfosprofiluser',$id);
  }
}


//completer les infos admin


public function completeinfosadmin(Request $request,$id)
{
  if (Auth::user() === null) {


      return view('welcome');
  } else {
   
    $request->validate([
      
        'cv' => 'nullable|file|mimes:pdf,doc,docx|max:2048',

    ]);
      $avantages = AvantagesCandidat::where('user_id','=',Auth::user()->id)->first();
     
      $missions = LesMissionDesCandidats::where('user_id','=',Auth::user()->id)->first();
    
     
$datess = $request->datelimitereponse;
$emails = $request->emailcandidat;
$offre = $request->offre;
$names = $request->name;
$ids = $request->ids;

$avantagesuser =User::where('id','=',Auth::user()->id)->first();

$avantageid= AvantagesCandidat::where('user_id','=',$avantagesuser->id)->first();
$missionid= LesMissionDesCandidats::where('user_id','=',$avantagesuser->id)->first() ;



InfosContratCandidat::create([

'servicerattachment'=>$request->nomservice,
'responsableservice'=>$request->nomresponsable,
'lieutravail'=>$request->lieutravail,
'datedebutcontrat'=>$request->datedebut,
'nbremoisperiodeessai'=>$request->nbrejours,
'remunerationbrute'=>$request->remuneration,
'nbremoisremunerationbrute'=>$request->nbremensualites,
'typecontrat'=>$request->typescontrat,
'dureecontrat'=>$request->dureescontrat,
'horairetravail'=>$request->nbreheuretravail,
'jourdebut'=>$request->firstjoursemaine,
'jourfin'=>$request->laststjoursemaine,
'heuredebut'=>$request->debutheuretravail,
'heurefin'=>$request->finheuretravail,
'nbrejoursconge'=>$request->nbrejoursconges,
'datelimitereponse'=>$request->datelimite,
'user_id'=>Auth::user()->id,
'avantage_candidat_id'=>$avantageid->id,
'missions_candidat_id'=>$missionid->id,



]);

$users=User::where('id','=',Auth::user()->id)->first();
$cvPath = null;
if ($request->hasFile('cv')) {
    $cvPath = $request->file('cv')->store('cv','public'); // Stocke le fichier dans le répertoire public/cv
}

$infosid= InfosContratCandidat::where('user_id','=',$avantagesuser->id)->first();
LesEmploye::create([
                
    'cv'=>$cvPath,
    'numerocnps'=>'aucun',
    'numeroassurancesante'=>'aucun',
    'user_id'=>Auth::user()->id,
    'infos_contrat_id'=>$infosid->id
]);

$employeid=LesEmploye::where('user_id','=',Auth::user()->id,)->first();
$users->update([
    'contratactive'=>'oui',
    'employe_id'=>$employeid->id
   
]);
// Envoyer l'e-mail


Sweetalert::success('avec success ', 'Vos informations ont été complétée(s)');
      return redirect()->route('completeinfosprofiluser',$id);
  }
}

}
