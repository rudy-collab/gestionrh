<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Candidat;
use App\Models\LesEmploye;
use Illuminate\Support\Str;
use App\Models\CoutEmbauche;
use Illuminate\Http\Request;
use PhpOffice\PhpWord\PhpWord;
use App\Models\MissionCandidat;
use PhpOffice\PhpWord\IOFactory;
use Wavey\Sweetalert\Sweetalert;
use App\Models\AvantagesCandidat;
use Illuminate\Support\Facades\DB;
use PhpOffice\PhpWord\Shared\Html;
use App\Models\CompteurCoutEmbauche;
use App\Models\InfosContratCandidat;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\CompteurCanalEmbauche;
use App\Models\LesMissionDesCandidats;
use App\Models\CompteurMissionCandidat;
use App\Models\CompteurAvantageCandidat;
use App\Notifications\SendContratCandidat;
use App\Models\AutresComposantesCoutEmbauche;
use App\Notifications\SendNotificationCandidatAcceptContrat;


class PropositionContratCandidatController extends Controller
{
      // 
      public function countmissioncandidat(Request $request, $id)
      {
        if (Auth::user() === null) {
    
    
            return redirect()->route('welcome');
        } else {
           
           
  $cand = Candidat::find($id);
  $upds = CompteurMissionCandidat::where('candidat_id','=',$cand->id)->where('user_id','=',$cand->user_id)->first();

  if($upds->status > 0){
  $upds->status-= 1;
  $upds->save();

  }elseif($upds->status === 0){

  }
       
       $status  = LesMissionDesCandidats::where('candidat_id','=',$cand->id)->where('user_id','=',$cand->user_id)->first();
   

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
       
            return redirect()->route('propositioncontratcandidat',$id);
        }
      }

public function countavantagescandidat(Request $request, $id)
      {
        if (Auth::user() === null) {
    
    
            return redirect()->route('welcome');
        } else {
           
           
  $cand = Candidat::find($id);
  $updss = CompteurAvantageCandidat::where('candidat_id','=',$cand->id)->where('user_id','=',$cand->user_id)->first();

  if($updss->status > 0){
  $updss->status-= 1;
  $updss->save();

  }elseif($updss->status === 0){

  }
  $avantages  = AvantagesCandidat::where('candidat_id','=',$cand->id)->where('user_id','=',$cand->user_id)->first();
  

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
   
            return redirect()->route('propositioncontratcandidat',$id);
        }
      }



//send contrat candidat

      public function sendcontratcandidat(Request $request,$id)
      {
        if (Auth::user() === null) {


            return view('welcome');
        } else {
            $recup = Candidat::find($id);
            $recups = $recup->id;
            $recupere = Candidat::where('id','=',$recups)->first();
            $avantages = AvantagesCandidat::where('candidat_id','=',$recup->id)->first();
           
            $missions = LesMissionDesCandidats::where('candidat_id','=',$recup->id)->first();
            $recupere->update([
                'selects'=>'oui'
            ]);
          
           
$datess = $request->datelimitereponse;
$emails = $request->emailcandidat;
$offre = $request->offre;
$names = $request->name;
$ids = $request->ids;
$cvPath = null;
if ($request->hasFile('cv')) {
    $cvPath = $request->file('cv')->store('cv','public'); // Stocke le fichier dans le répertoire public/cv
}


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
'user_id'=>$recupere->user_id,
'candidat_id'=>$recups,
'avantage_candidat_id'=>$avantages->id,
'missions_candidat_id'=>$missions->id,



]);

  // Envoyer l'e-mail
  $recup->Notify(new SendContratCandidat($names, $offre, $ids,$datess));

  Sweetalert::success(' envoyé avec success ', 'Proposition de Contrat');
            return redirect()->route('propositioncontratcandidat',$id);
        }
      }

      //reponse proposition contrat
      public function reponsepropositioncontrat($id)
      {
        if (Auth::user() === null) {


            return view('welcome');
        } else {
            $cand = Candidat::find($id);
            $recups = $cand->id;
            $recupere = Candidat::where('id','=',$recups)->first();
            
            $reponse = InfosContratCandidat::where('candidat_id','=',$recups)->where('user_id','=',$recupere->user_id)->first();
            $lesmissions = LesMissionDesCandidats::where('candidat_id','=',$recups)->where('user_id','=',$recupere->user_id)->first();
            $avantages = AvantagesCandidat::where('candidat_id','=',$recups)->where('user_id','=',$recupere->user_id)->first();
            return view('reponsepropositioncontrat',
            [
                $id,
                'reponse' => $reponse,
                'cand' => $cand,
                'lesmissions' => $lesmissions,
                'avantages' => $avantages,
            ]
            );
        }
      }


      public function reponsepropositioncontratAll(Request $request,$id)
      {
        if (Auth::user() === null) {


            return view('welcome');
        } else {
           
            $cand = Candidat::find($id);
            $recups = $cand->id;
           
            $recupere = Candidat::where('id','=',$recups)->first();
            $reponse = InfosContratCandidat::where('candidat_id','=',$recups)->where('user_id','=',$recupere->user_id)->first();
           
            $lesmissions = LesMissionDesCandidats::where('candidat_id','=',$recups)->where('user_id','=',$recupere->user_id)->first();
            $avantages = AvantagesCandidat::where('candidat_id','=',$recups)->where('user_id','=',$recupere->user_id)->first();
            //word
          
           

            //
            $exists = LesEmploye::where('email', $cand->email)->exists();
        
        $email = $request->input('email');
      
            $admins=User::where('email', '=', $request->emails)->first();
            $adminId=$admins->id;
          
            $matricules = Str::random(10);
           
            $employe = LesEmploye::where('candidat_id','=',$recups)->where('user_id','=',$recupere->user_id)->first();
            User::create([
                'name' => $cand->name,
                'prenom'=>$cand->prenom,
                'email' => $cand->email,
                'admin'=>'Pas Admin',
                'societe'=>$cand->offreemploi->user->societe,
                'telephone'=>$cand->telephone,
                'idadmin'=>$adminId,
                'matricule'=>$matricules,
                'employe'=>'oui',
                'nouveau'=>'oui',
                'adresse'=>$cand->adresse,
                'contratactive'=>'oui',
                'candidat'=>'oui',
                'role'=>$request->titre,
                'sexe'=>$request->sexe
               
            ]);

           
            if($exists ){
                Sweetalert::warning('Un employe avec cet email existe deja..');
                return view('reponsepropositioncontrat',compact('reponse','cand','lesmissions','avantages'));
            }else{
                LesEmploye::create([
            
                    'numerocnps'=>'aucun',
                    'numeroassurancesante'=>'aucun',
                    'user_id'=>$recupere->user_id,
                    'candidat_id'=>$recups,
                    'infos_contrat_id'=>$reponse->id,
                   
                   
                ]);
            }
         
            return redirect()->route('confirmreponsepropositioncontrat',$id);
        }
      }

      public function confirmreponsepropositioncontrat($id)
      {
        if (Auth::user() === null) {


            return view('welcome');
        } else {
           
            $cand = Candidat::find($id);
           
            $recups = $cand->id;
         
            $recupere = Candidat::where('id','=',$recups)->first();
            
            $reponse = InfosContratCandidat::where('candidat_id','=',$recups)->where('user_id','=',$recupere->user_id)->first();
           
            $lesmissions = LesMissionDesCandidats::where('candidat_id','=',$recups)->where('user_id','=',$recupere->user_id)->first();
            $avantages = AvantagesCandidat::where('candidat_id','=',$recups)->where('user_id','=',$recupere->user_id)->first();
            //word
          
           

            //
            $exists = LesEmploye::where('email', $cand->email)->exists();
        
            CompteurCoutEmbauche::create([
                'status'=>10 ,
                'email'=>$cand->email,
                'user_id'=>Auth::user()->id,
         
              ]);
              CompteurCanalEmbauche::create([
                'status'=>10 ,
                'email'=>$cand->email,
                'user_id'=>Auth::user()->id,
         
              ]);
              CoutEmbauche::create([
                'sitesdemploienligne'=>0,
                'reseauxsociaux'=>0,
                'siteswebdentreprise'=>0,
                'agencesderecrutement'=>0,
                'forumsetgroupesspecialises'=>0,
                'journauxetmagazines'=>0,
                'ecolesetuniversites'=>0,
                'evenementsderecrutement'=>0,
                'bulletinsinternes'=>0,
                'recrutementdirecte'=>0,
                'email'=>$cand->email,
                'user_id'=>Auth::user()->id
              ]);
      
              AutresComposantesCoutEmbauche::create([
                'composanteun'=>'non',
                'composantedeux'=>'non',
                'composantetrois'=>'non',
                'composantequatre'=>'non',
                'composantecinq'=>'non',
                'composantesix'=>'non',
                'composantesept'=>'non',
                'composantehuit'=>'non',
                'composanteneuf'=>'non',
                'composantedix'=>'non',
                'valeurun'=>0,
                'valeurdeux'=>0,
                'valeurtrois'=>0,
                'valeurquatre'=>0,
                'valeurcinq'=>0,
                'valeursix'=>0,
                'valeursept'=>0,
                'valeurhuit'=>0,
                'valeurneuf'=>0,
                'valeurdix'=>0,
                'email'=>$cand->email,
                'user_id'=>Auth::user()->id
              ]);
           
           
            $admins=User::where('email', '=',  $cand->email)->first();
            $adminId=$admins->id;
            $password = Str::random(8);
           
           
            $employe = LesEmploye::where('candidat_id','=',$recups)->where('user_id','=',$recupere->user_id)->first();
      
            $admins->update([
              
                'password' => Hash::make($password),
                'employe_id'=>$employe->id,
               
             

               
            ]);

            $names=$cand->name;
            $emails=$cand->email;
            $motdepasse=$password;
            $cand->Notify(new SendNotificationCandidatAcceptContrat($names,$emails,$motdepasse));
            Sweetalert::success('enregistrée avec success', 'Felicitations vous etes dersomais dans la base de donnee de'.''.$cand->offreemploi->user->societe);

            return redirect()->route('reponsepropositioncontrat', [
                $id,
                'reponse' => $reponse,
                'cand' => $cand,
                'lesmissions' => $lesmissions,
                'avantages' => $avantages,
            ]);
        }
      }


    
}
