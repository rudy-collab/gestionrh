<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Candidat;
use App\Models\LesEmploye;
use App\Models\OffreEmploi;
use Illuminate\Http\Request;
use PhpOffice\PhpWord\PhpWord;
use Barryvdh\DomPDF\Facade\Pdf;
use PhpOffice\PhpWord\IOFactory;
use Wavey\Sweetalert\Sweetalert;
use App\Models\AvantagesCandidat;
use Illuminate\Support\Facades\DB;
use PhpOffice\PhpWord\Shared\Html;
use App\Models\InfosContratCandidat;
use Illuminate\Support\Facades\Auth;
use App\Models\LesMissionDesCandidats;


class VoirMesEmployesController extends Controller
{
     //voir mes employes
     public function voirmesemployes()
     {
       if (Auth::user() === null) {


           return view('welcome');
       } else {
     
        
$lavaleur='';

        $employes = LesEmploye::where('user_id','=',Auth::user()->id)->orderBy('id', 'desc')->with('user')->paginate(4);
        $user = User::where('id','=',Auth::user()->id)->first();
        $usersemploye = $user->societe;
       
        $users=User::where('societe','=', $usersemploye)->paginate(3);
        $firstEntry = DB::table('users')->where('societe', '=', Auth::user()->societe)->oldest('id')->first();
   
           return view('voirmesemployes',[ 'employes'=>$employes,'firstEntry'=>$firstEntry,'users'=>$users,'lavaleur'=>$lavaleur]);
       }
     }


     //voir employe all

     public function voirmesemployesAll(Request $request)
     {
       if (Auth::user() === null) {


           return view('welcome');
       } else {
     
        
       
        $employes = LesEmploye::where('user_id','=',Auth::user()->id)->orderBy('id', 'desc')->with('user')->paginate(4);
        $user = User::where('id','=',Auth::user()->id)->first();
        $usersemploye = $user->societe;
       
        $users=User::where('societe','=', $usersemploye)->paginate(1);
        $check = DB::table('users')->where('societe', '=', Auth::user()->societe)->where('name','=',$request->emp)->oldest('id')->first();
      
        $firstEntry = DB::table('users')->where('societe', '=', Auth::user()->societe)->oldest('id')->first();
      
        if(($check->candidat =='non') && ($check->owner == 'non') && ($check->contratactive == 'oui')){
          return redirect()->route('employepermissiondetails',[
           $check->id,
            'employes'=>$employes,'firstEntry'=>$firstEntry,'users'=>$users,'check'=>$check]);
       }elseif(($check->candidat =='non') && ($check->owner == 'oui') && ($check->contratactive == 'oui')){
        return redirect()->route('employedetails',[
          $check->id,
           'employes'=>$employes,'firstEntry'=>$firstEntry,'users'=>$users,'check'=>$check]);
       }elseif(($check->candidat =='oui') && ($check->owner == 'non') && ($check->contratactive == 'oui')){
        return redirect()->route('employedetailscandidat',[
          $check->id,
           'employes'=>$employes,'firstEntry'=>$firstEntry,'users'=>$users,'check'=>$check]);
       }elseif(($check->contratactive == 'non')){
        $firstEntry = DB::table('users')->where('societe', '=', Auth::user()->societe)->oldest('id')->first();
        Sweetalert::warning('','Veuiller Actualiser son profil au prealable'); 
        return redirect()->route('voirmesemployes',[
          
           'employes'=>$employes,'firstEntry'=>$firstEntry,'users'=>$users,'check'=>$check]);
       }
        }
          
     }

     //choisir employe pour permission

     public function choixemployepourpermission()
     {
       if (Auth::user() === null) {


           return view('welcome');
       } else {
     
        

        $employes = LesEmploye::where('user_id','=',Auth::user()->id)->orderBy('id', 'desc')->with('user')->paginate(4);
        $user = User::where('id','=',Auth::user()->id)->first();
        $usersemploye = $user->societe;
       
        $users=User::where('societe','=', $usersemploye)->get();
        $firstEntry = DB::table('users')->where('societe', '=', Auth::user()->societe)->oldest('id')->first();
      
           return view('choixemployepourpermission',compact('employes','firstEntry','users'));
       }
     }

      //modifier permission

      public function choixemployepourpermissionupdate(Request $request)
      {
        if (Auth::user() === null) {
 
 
            return view('welcome');
        } else {
         
          $employechangeid = $request->idi;
  
         

         $employes = LesEmploye::where('user_id','=',Auth::user()->id)->orderBy('id', 'desc')->with('user')->paginate(4);
         $user = User::where('id','=',Auth::user()->id)->first();
         $usersemploye = $user->societe;
        
         $users=User::where('societe','=', $usersemploye)->get();
         $usersperms = User::where('idadmin','=',Auth::user()->id)->where('permission','=',$request->role)->first();
        
         $existsun = $users->contains(function ($perm) {
          return $perm->permission == 'Responsable Recrutement';
      });

      $existsdeux = $users->contains(function ($perm) {
        return $perm->permission == 'Responsable Gestion des Performances';
    });

    $existstrois = $users->contains(function ($perm) {
      return $perm->permission == 'Responsable Gestion de la Paie';
  });

  $existsquatre = $users->contains(function ($perm) {
    return $perm->permission == 'Responsable Gestion des Conges et des Absences';
});


//...........//
if($request->role == 'Responsable Recrutement'){
if($existsun){
  $firstEntry = DB::table('users')->where('societe', '=', Auth::user()->societe)->oldest('id')->first(); 
 
  
    Sweetalert::warning('occupe deja ce poste veuillez d\'abord le lui oter avant de nomer une autre personne', 'L\'employé'.' '.$usersperms->name . ' ' . $usersperms->prenom);     
    return redirect()->route('choixemployepourpermission',compact('employes','firstEntry','users','existsun'));

}
}

if($request->role == 'Responsable Gestion des Performances'){
if($existsdeux){
  $firstEntry = DB::table('users')->where('societe', '=', Auth::user()->societe)->oldest('id')->first(); 
 

  Sweetalert::warning('occupe deja ce poste veuillez d\'abord le lui oter avant de nomer une autre personne', 'L\'employé'.' '.$usersperms->name . ' ' . $usersperms->prenom);     
  return redirect()->route('choixemployepourpermission',compact('employes','firstEntry','users','existsun'));

}
}




if($request->role == 'Responsable Gestion de la Paie'){
if($existstrois){
  $firstEntry = DB::table('users')->where('societe', '=', Auth::user()->societe)->oldest('id')->first(); 
  Sweetalert::warning('occupe deja ce poste veuillez d\'abord le lui oter avant de nomer une autre personne', 'L\'employé'.' '.$usersperms->name . ' ' . $usersperms->prenom);     
  return redirect()->route('choixemployepourpermission',compact('employes','firstEntry','users','existsun'));
}
}



if($request->role == 'Responsable Gestion des Conges et des Absences'){
if($existsquatre){
  $firstEntry = DB::table('users')->where('societe', '=', Auth::user()->societe)->oldest('id')->first(); 
  Sweetalert::warning('occupe deja ce poste veuillez d\'abord le lui oter avant de nomer une autre personne', 'L\'employé'.' '.$usersperms->name . ' ' . $usersperms->prenom);     
  return redirect()->route('choixemployepourpermission',compact('employes','firstEntry','users','existsun'));
}
}



 $changepermission = User::where('id','=',$employechangeid)->first();


  $changepermission->update([
    'permission'=>$request->role,
    'role'=>$request->role
   ]);

$admins = User::where('id','=',Auth::user()->id)->first();
$admins->update([
  'creationpermission'=>'oui'
]);

         $firstEntry = DB::table('users')->where('societe', '=', Auth::user()->societe)->oldest('id')->first();
         Sweetalert::warning('','Function modifié avec succes');  
            return redirect()->route('choixemployepourpermission',compact('employes','firstEntry','users','existsun'));
        }
      }





// modif permission employe
public function modifpermissionemploye($id){
  if (Auth::user() === null) {
 
 
    return view('welcome');
} else {
  $user = User::find($id);
 
$users = $user->where('id','=',$user->id)->first();

return view('modifpermissionemploye',compact('users'));
}
}




// 
public function modifpermissionemployeAll(Request $request, $id)
{
  if (Auth::user() === null) {


      return view('welcome');
  } else {

    $user = User::find($id);
 
    $users = $user->where('id','=',$user->id)->first();
$users->update([
  'permission'=>'aucune',
  'role'=>$request->role
]);

    Sweetalert::success('modifiée avec succès', 'Fonction ou Role ');
      return redirect()->route('choixemployepourpermission');
  }
}





      //voir mes employes en details
      public function employedetails($id)
      {
        if (Auth::user() === null) {
 
 
            return view('welcome');
        } else {
          
          $employes = User::find($id);

         
      
         $firstEntry = DB::table('users')->where('id', '=', $employes->id)->oldest('id')->first();
         
         $firstEmploi = DB::table('candidats')->where('email', '=', $employes->email)->oldest('id')->first();
        
        
       

         $lesmissions = LesMissionDesCandidats::where('user_id','=',$employes->id)->first();
         $lesavantages = AvantagesCandidat::where('user_id','=',$employes->id)->first();
        
            return view('employedetails',compact('employes','firstEntry','lesmissions','lesavantages','firstEmploi'));
        }
      }

      public function employedetailscandidat($id)
      {
        if (Auth::user() === null) {
 
 
            return view('welcome');
        } else {
          
          $employes = User::find($id);
        
         $firstEntry = DB::table('users')->where('id', '=', $employes->id)->oldest('id')->first();
         
         $firstEmploi = DB::table('candidats')->where('email', '=', $employes->email)->oldest('id')->first();
       
        
       

         $lesmissions = LesMissionDesCandidats::where('candidat_id','=',$firstEmploi->id)->first();
         $lesavantages = AvantagesCandidat::where('candidat_id','=',$firstEmploi->id)->first();
        
            return view('employedetailscandidat',compact('employes','firstEntry','lesmissions','lesavantages','firstEmploi'));
        }
      }



      // employe permission details

      public function employepermissiondetails($id)
      {
        if (Auth::user() === null) {
 
 
            return view('welcome');
        } else {
          
          $employes = User::find($id);
       
         $firstEntry = DB::table('users')->where('id', '=', $employes->id)->oldest('id')->first();
         
         $firstEmploi = DB::table('candidats')->where('email', '=', $employes->email)->oldest('id')->first();
       
 
         $lesmissions = LesMissionDesCandidats::where('user_id','=',Auth::user()->id)->where('email','=',$employes->email)->first();
         $lesavantages = AvantagesCandidat::where('user_id','=',Auth::user()->id)->where('email','=',$employes->email)->first();
        
            return view('employepermissiondetails',compact('employes','firstEntry','lesmissions','lesavantages','firstEmploi'));
        }
      }

  

public function voircontratcandidat($id)
{
   
  $cand = User::find($id);

  $employeid =User::where('email','=',$cand->email)->first() ;
$employeur = User::where('idadmin','=',$cand->idadmin)->first() ;
$employeurs = User::where('id','=',$employeur->idadmin)->first() ;
$precedUrl =  url()->previous();
  $recupere = Candidat::where('email','=',$employeid->email)->first();


  $reponse = InfosContratCandidat::where('candidat_id','=',$recupere->id)->first();
 
  $lesmissions = LesMissionDesCandidats::where('user_id','=',$employeid->id)->first();
  $avantages = AvantagesCandidat::where('candidat_id','=',$recupere->id)->first();
  $firstCand = DB::table('candidats')->where('user_id','=',$employeid->id)->first();
  return view('voircontratcandidat',compact('reponse','cand','lesmissions','avantages','firstCand','employeurs','precedUrl'));

}

//contrat employe permission

public function voircontratemployepermission($id)
{
   
  $cand = User::find($id);

  $employeid =User::where('email','=',$cand->email)->first() ;
$employeur = User::where('idadmin','=',$cand->idadmin)->first() ;
$employeurs = User::where('id','=',$employeur->idadmin)->first() ;
$precedUrl =  url()->previous();


  $lesmissions = LesMissionDesCandidats::where('user_id','=',Auth::user()->id)->where('email','=',$employeid->email)->first();
  $avantages = AvantagesCandidat::where('user_id','=',Auth::user()->id)->where('email','=',$employeid->email)->first();
  
  $reponse = InfosContratCandidat::where('user_id','=',Auth::user()->id)->where('avantage_candidat_id','=',$avantages->id)->first();
  return view('voircontratemployepermission',compact('reponse','cand','lesmissions','avantages','employeurs','precedUrl'));

}


public function voircontratemploye($id)
{
   
  $cand = User::find($id);

  $employeid =User::where('email','=',$cand->email)->first() ;
  $precedUrl =  url()->previous();
  $reponse = InfosContratCandidat::where('user_id','=',$cand->id)->first();
 
  $lesmissions = LesMissionDesCandidats::where('user_id','=',$employeid->id)->first();
  $avantages = AvantagesCandidat::where('user_id','=',$employeid->id)->first();

  return view('voircontratemploye',compact('cand','lesmissions','avantages','precedUrl'));

}

//telecharger contrat


public function telechargercontratemploye($id)
{
  $cand = User::find($id);

  $employeid =User::where('email','=',$cand->email)->first() ;
$employeur = User::where('idadmin','=',$cand->idadmin)->first() ;
$employeurs = User::where('id','=',$employeur->idadmin)->first() ;

  $recupere = Candidat::where('email','=',$employeid->email)->first();


  $reponse = InfosContratCandidat::where('candidat_id','=',$recupere->id)->first();
$poste = $cand->voiremploye->candidat->offreemploi->titre;
$naturecontrat =$cand->voiremploye->infoscontratcandidat->typecontrat;
$dateentreeenfonction=$cand->voiremploye->infoscontratcandidat->datedebutcontrat;
$lieutravail=$cand->voiremploye->infoscontratcandidat->lieutravail;
$dureehebdomadairetravail=$cand->voiremploye->infoscontratcandidat->horairetravail ;
$jourdebuttravail=$cand->voiremploye->infoscontratcandidat->jourdebut;
$jourfintravail=$cand->voiremploye->infoscontratcandidat->jourfin;
$heuredebuttravail=$cand->voiremploye->infoscontratcandidat->heuredebut;
$heurefintravail=$cand->voiremploye->infoscontratcandidat->heurefin;
$remuneration=round($cand->voiremploye->infoscontratcandidat->remunerationbrute / 12);
$nbrejoursconge=$cand->voiremploye->infoscontratcandidat->nbrejoursconge;
$nbremoisperiodeessai=$cand->voiremploye->infoscontratcandidat->nbremoisperiodeessai;


     // Récupérer le contenu spécifique de la vue
    

    
    // Extraction de la partie spécifique
    $phpWord = new PhpWord();
    $section = $phpWord->addSection();
    $html = "<div>
   
    <h1 style='color:gray'><strong>CONTRAT DE TRAVAIL M/Mme  $employeid->name</strong></h1>
    <hr style='color:gray'></hr>
    <br></br>
    <p><em>Entre les soussignés:</em></p>
    <br></br>
    <p><strong>* L'employeur :</strong> </p>
    <p><strong>Nom de la société : $employeurs->societe</strong> </p>
    <p><strong>Adresse : $employeurs->adresse</strong> </p>
    <p><strong>Representé par : $employeurs->name</strong> </p>
    <p><strong>Telephone : $employeurs->telephone</strong></p>
    <p><strong>Fonction : $employeurs->role</strong> </p>
    <br></br>
  
    <p><strong>* L'employé :</strong> </p>
    <p><strong>Nom : $employeid->name</strong> </p>
    <p><strong>Adresse : $employeid->adresse</strong> </p>
    <p><strong>Telephone : $employeid->telephone</strong> </p>
    <br></br>
    <p><strong>Objet du contrat :</strong></p>
<p>Le présent contrat a pour objet de fixer les conditions d'emploi de M/Mme  <strong>$employeid->name</strong> en qualité de <strong>$poste</strong> au sein de <strong>$employeurs->societe</strong></p>
<br></br>
<p><strong>Type de Contrat : </strong></p>
<p><strong>Nature du contrat : </strong> $naturecontrat.</p>
<br></br>
<p><strong>Date d'entrée en fonction </strong> : $dateentreeenfonction</p>
<br></br>
<p><strong>Lieu de travail : $lieutravail</strong></p>
<br></br>
<p><strong>Durée du travail :</strong></p>
<p>La durée hebdomadaire de travail est fixée à <strong> $dureehebdomadairetravail heures </strong>, réparties selon les horaires suivants : </p>
<p>Du <strong>$jourdebuttravail</strong> au <strong>$jourfintravail</strong> de <strong>$heuredebuttravail</strong> å <strong>$heurefintravail.</strong> </p>
<br></br>
<p><strong>Remuneration : </strong></p>
<p>L'employée percevra une rémunération brute de <strong>$remuneration Fcfa</strong> par mois.</p>
<br></br>
<p><strong>Congés : </strong></p>
<p>L'employée a droit à <strong>$nbrejoursconge jours de congés</strong> payés par an, en plus des jours fériés légaux.</p>
<br></br>
<p><strong>Période d'essai : </strong></p>
<p>Une période d'essai de <strong>$nbremoisperiodeessai mois</strong> est prévue, renouvelable une fois pour la même durée.</p>
<br></br>
<p><strong>Confidentialité :</strong></p>
<p>L'employée s'engage à ne pas divulguer les informations confidentielles de l'entreprise, pendant et après la durée du contrat.</p>
<br></br>
<p><strong>Rupture du Contrat :</strong></p>
<p>Le présent contrat peut être résilié par l'une des parties avec un préavis de 2 mois, conformément aux dispositions légales en vigueur.</p>
<br></br>
<p>Fait å ... le ...</p>

                </div>";

  Html::addHtml($section, $html);

    $fileName ='Contrat.docx';
    $filePath = storage_path($fileName);

    $writer = IOFactory::createWriter($phpWord, 'Word2007');
    $writer->save($filePath);

    // Téléchargement du fichier Word
    if (request()->has('download')) {
        return response()->download($filePath);
    }
 
     // Retourner une vue avec le contenu complet
     return redirect()->route('voircontratcandidat');
}



//


public function telechargercontratemployes($id)
{
  $cand = User::find($id);

  $reponse = InfosContratCandidat::where('user_id','=',$cand->id)->first();

$naturecontrat =$cand->voiremploye->infoscontratcandidat->typecontrat;
$dateentreeenfonction=$cand->voiremploye->infoscontratcandidat->datedebutcontrat;
$lieutravail=$cand->voiremploye->infoscontratcandidat->lieutravail;
$dureehebdomadairetravail=$cand->voiremploye->infoscontratcandidat->horairetravail ;
$jourdebuttravail=$cand->voiremploye->infoscontratcandidat->jourdebut;
$jourfintravail=$cand->voiremploye->infoscontratcandidat->jourfin;
$heuredebuttravail=$cand->voiremploye->infoscontratcandidat->heuredebut;
$heurefintravail=$cand->voiremploye->infoscontratcandidat->heurefin;
$remuneration=round($cand->voiremploye->infoscontratcandidat->remunerationbrute / 12);
$nbrejoursconge=$cand->voiremploye->infoscontratcandidat->nbrejoursconge;
$nbremoisperiodeessai=$cand->voiremploye->infoscontratcandidat->nbremoisperiodeessai;


     // Récupérer le contenu spécifique de la vue
    

    
    // Extraction de la partie spécifique
    $phpWord = new PhpWord();
    $section = $phpWord->addSection();
    $html = "<div>
   
    <h1 style='color:gray'><strong>CONTRAT DE TRAVAIL M/Mme  $cand->name</strong></h1>
    <hr style='color:gray'></hr>
    <br></br>
    <p><em>Entre les soussignés:</em></p>
    <br></br>
    <p><strong>* L'employeur :</strong> </p>
    <p><strong>Nom de la société : $cand->societe</strong> </p>
    <p><strong>Adresse : $cand->adresse</strong> </p>
    <p><strong>Representé par : $cand->name</strong> </p>
    <p><strong>Telephone : $cand->telephone</strong></p>
    <p><strong>Fonction : $cand->role</strong> </p>
    <br></br>
  
    <p><strong>* L'employé :</strong> </p>
    <p><strong>Nom : $cand->name</strong> </p>
    <p><strong>Adresse : $cand->adresse</strong> </p>
    <p><strong>Telephone : $cand->telephone</strong> </p>
    <br></br>
    <p><strong>Objet du contrat :</strong></p>
<p>Le présent contrat a pour objet de fixer les conditions d'emploi de M/Mme  <strong>$cand->name</strong> en qualité de <strong>$cand->role</strong> au sein de <strong>$cand->societe</strong></p>
<br></br>
<p><strong>Type de Contrat : </strong></p>
<p><strong>Nature du contrat : </strong> $naturecontrat.</p>
<br></br>
<p><strong>Date d'entrée en fonction </strong> : $dateentreeenfonction</p>
<br></br>
<p><strong>Lieu de travail : $lieutravail</strong></p>
<br></br>
<p><strong>Durée du travail :</strong></p>
<p>La durée hebdomadaire de travail est fixée à <strong> $dureehebdomadairetravail heures </strong>, réparties selon les horaires suivants : </p>
<p>Du <strong>$jourdebuttravail</strong> au <strong>$jourfintravail</strong> de <strong>$heuredebuttravail</strong> å <strong>$heurefintravail.</strong> </p>
<br></br>
<p><strong>Remuneration : </strong></p>
<p>L'employée percevra une rémunération brute de <strong>$remuneration Fcfa</strong> par mois.</p>
<br></br>
<p><strong>Congés : </strong></p>
<p>L'employée a droit à <strong>$nbrejoursconge jours de congés</strong> payés par an, en plus des jours fériés légaux.</p>
<br></br>
<p><strong>Période d'essai : </strong></p>
<p>Une période d'essai de <strong>$nbremoisperiodeessai mois</strong> est prévue, renouvelable une fois pour la même durée.</p>
<br></br>
<p><strong>Confidentialité :</strong></p>
<p>L'employée s'engage à ne pas divulguer les informations confidentielles de l'entreprise, pendant et après la durée du contrat.</p>
<br></br>
<p><strong>Rupture du Contrat :</strong></p>
<p>Le présent contrat peut être résilié par l'une des parties avec un préavis de 2 mois, conformément aux dispositions légales en vigueur.</p>
<br></br>
<p>Fait å ... le ...</p>

                </div>";

  Html::addHtml($section, $html);

    $fileName ='Contrat.docx';
    $filePath = storage_path($fileName);

    $writer = IOFactory::createWriter($phpWord, 'Word2007');
    $writer->save($filePath);

    // Téléchargement du fichier Word
    if (request()->has('download')) {
        return response()->download($filePath);
    }
 
     // Retourner une vue avec le contenu complet
     return redirect()->route('voircontratcandidat');
}




public function telechargercontratemployespermission($id)
{
  $cand = User::find($id);

  $employeid =User::where('email','=',$cand->email)->first() ;
$employeur = User::where('idadmin','=',$cand->idadmin)->first() ;
$employeurs = User::where('id','=',$employeur->idadmin)->first() ;

 

$avantages = AvantagesCandidat::where('user_id','=',Auth::user()->id)->where('email','=',$employeid->email)->first();
  $reponse = InfosContratCandidat::where('user_id','=',Auth::user()->id)->where('avantage_candidat_id','=',$avantages->id)->first();
$poste = $cand->role;
$naturecontrat =$cand->voiremploye->infoscontratcandidat->typecontrat;
$dateentreeenfonction=$cand->voiremploye->infoscontratcandidat->datedebutcontrat;
$lieutravail=$cand->voiremploye->infoscontratcandidat->lieutravail;
$dureehebdomadairetravail=$cand->voiremploye->infoscontratcandidat->horairetravail ;
$jourdebuttravail=$cand->voiremploye->infoscontratcandidat->jourdebut;
$jourfintravail=$cand->voiremploye->infoscontratcandidat->jourfin;
$heuredebuttravail=$cand->voiremploye->infoscontratcandidat->heuredebut;
$heurefintravail=$cand->voiremploye->infoscontratcandidat->heurefin;
$remuneration=round($cand->voiremploye->infoscontratcandidat->remunerationbrute / 12);
$nbrejoursconge=$cand->voiremploye->infoscontratcandidat->nbrejoursconge;
$nbremoisperiodeessai=$cand->voiremploye->infoscontratcandidat->nbremoisperiodeessai;


     // Récupérer le contenu spécifique de la vue
    

    
    // Extraction de la partie spécifique
    $phpWord = new PhpWord();
    $section = $phpWord->addSection();
    $html = "<div>
   
    <h1 style='color:gray'><strong>CONTRAT DE TRAVAIL M/Mme  $employeid->name</strong></h1>
    <hr style='color:gray'></hr>
    <br></br>
    <p><em>Entre les soussignés:</em></p>
    <br></br>
    <p><strong>* L'employeur :</strong> </p>
    <p><strong>Nom de la société : $employeurs->societe</strong> </p>
    <p><strong>Adresse : $employeurs->adresse</strong> </p>
    <p><strong>Representé par : $employeurs->name</strong> </p>
    <p><strong>Telephone : $employeurs->telephone</strong></p>
    <p><strong>Fonction : $employeurs->role</strong> </p>
    <br></br>
  
    <p><strong>* L'employé :</strong> </p>
    <p><strong>Nom : $employeid->name</strong> </p>
    <p><strong>Adresse : $employeid->adresse</strong> </p>
    <p><strong>Telephone : $employeid->telephone</strong> </p>
    <br></br>
    <p><strong>Objet du contrat :</strong></p>
<p>Le présent contrat a pour objet de fixer les conditions d'emploi de M/Mme  <strong>$employeid->name</strong> en qualité de <strong>$poste</strong> au sein de <strong>$employeurs->societe</strong></p>
<br></br>
<p><strong>Type de Contrat : </strong></p>
<p><strong>Nature du contrat : </strong> $naturecontrat.</p>
<br></br>
<p><strong>Date d'entrée en fonction </strong> : $dateentreeenfonction</p>
<br></br>
<p><strong>Lieu de travail : $lieutravail</strong></p>
<br></br>
<p><strong>Durée du travail :</strong></p>
<p>La durée hebdomadaire de travail est fixée à <strong> $dureehebdomadairetravail heures </strong>, réparties selon les horaires suivants : </p>
<p>Du <strong>$jourdebuttravail</strong> au <strong>$jourfintravail</strong> de <strong>$heuredebuttravail</strong> å <strong>$heurefintravail.</strong> </p>
<br></br>
<p><strong>Remuneration : </strong></p>
<p>L'employée percevra une rémunération brute de <strong>$remuneration Fcfa</strong> par mois.</p>
<br></br>
<p><strong>Congés : </strong></p>
<p>L'employée a droit à <strong>$nbrejoursconge jours de congés</strong> payés par an, en plus des jours fériés légaux.</p>
<br></br>
<p><strong>Période d'essai : </strong></p>
<p>Une période d'essai de <strong>$nbremoisperiodeessai mois</strong> est prévue, renouvelable une fois pour la même durée.</p>
<br></br>
<p><strong>Confidentialité :</strong></p>
<p>L'employée s'engage à ne pas divulguer les informations confidentielles de l'entreprise, pendant et après la durée du contrat.</p>
<br></br>
<p><strong>Rupture du Contrat :</strong></p>
<p>Le présent contrat peut être résilié par l'une des parties avec un préavis de 2 mois, conformément aux dispositions légales en vigueur.</p>
<br></br>
<p>Fait å ... le ...</p>

                </div>";

  Html::addHtml($section, $html);

    $fileName ='Contrat.docx';
    $filePath = storage_path($fileName);

    $writer = IOFactory::createWriter($phpWord, 'Word2007');
    $writer->save($filePath);

    // Téléchargement du fichier Word
    if (request()->has('download')) {
        return response()->download($filePath);
    }
 
     // Retourner une vue avec le contenu complet
     return redirect()->route('voircontratcandidat');
}




}
