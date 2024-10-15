<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\LesEmploye;
use App\Models\CoutEmbauche;
use Illuminate\Http\Request;
use App\Models\CoutParEmbauche;
use Illuminate\Support\Facades\DB;
use App\Models\CompteurCoutEmbauche;
use Illuminate\Support\Facades\Auth;
use App\Models\CompteurCanalEmbauche;
use App\Models\AutresComposantesCoutEmbauche;

class CoutParEmployeController extends Controller
{
    //
    public function coutparemploye()
    {
      if (Auth::user() === null) {


          return view('welcome');
      } else {



          return view('coutparemploye');
      }
    }


    public function coutparemployecalcul()
     {
       if (Auth::user() === null) {


           return view('welcome');
       } else {
     
      
      
        $employes = LesEmploye::where('user_id','=',Auth::user()->id)->orderBy('id', 'desc')->with('user')->paginate(4);
        $user = User::where('id','=',Auth::user()->id)->first();
        $usersemploye = $user->id;
       
       
        $users=User::where('societe','=', $user->societe)->where('owner','=','non')->get();
        $firstEntry = DB::table('users')->where('societe', '=', Auth::user()->societe)->oldest('id')->first();
      
           return view('coutparemployecalcul',compact('employes','firstEntry','users'));
       }
     }




     //configure cout employe
     public function configurercoutembaucheparemploye($id)
     {
       if (Auth::user() === null) {


           return view('welcome');
       } else {
     
        $employe = User::find($id);
        $montant='';
        $montants='';
       $montant1='';
       $montant2='';
       $montant3='';
       $montant4='';
       $montant5='';
       $montant6='';
       $montant7='';
       $montant8='';
       $montant9='';
       $montant10='';
       $montantcanal1='';
       $montantcanal2='';
       $montantcanal3='';
       $montantcanal4='';
       $montantcanal5='';
       $montantcanal6='';
       $montantcanal7='';
       $montantcanal8='';
       $montantcanal9='';
       $montantcanal10='';



        $composanteun='';
        $composantedeux='';
        $composantetrois='';
        $composantequatre='';
        $composantecinq='';
        $composantesix='';
        $composantesept='';
        $composantehuit='';
        $composanteneuf='';
        $composantedix='';
        $valeurun='';
        $valeurdeux='';
        $valeurtrois='';
        $valeurquatre='';
        $valeurcinq='';
        $valeursix='';
        $valeursept='';
        $valeurhuit='';
        $valeurneuf='';
        $valeurdix='';
        $recup = CompteurCoutEmbauche::where('email','=',$employe->email)->first();

        if($recup->status == 10){
          $montant ='Configurez les composantes d\'embauche...vous pouvez en ajouter' .' '.$recup->status .' '.'maximum';
         }elseif(($recup->status < 10)){
          $montant ='Vous pouvez encore en ajouter' .' '.$recup->status;
         }
         elseif($recup ===0){
          $montant ='';
         }

         $recups = CompteurCanalEmbauche::where('email','=',$employe->email)->first();

         if($recups->status == 10){
           $montants ='Configurez les composantes d\'embauche...vous pouvez en ajouter' .' '.$recups->status .' '.'maximum';
          }elseif(($recups->status < 10)){
           $montants ='Vous pouvez encore en ajouter' .' '.$recups->status;
          }
          elseif($recups ===0){
           $montants ='';
          }

         $status  = CoutEmbauche::where('email','=',$employe->email)->first();
         $statuss  = AutresComposantesCoutEmbauche::where('email','=',$employe->email)->first();
       



         if(($status->sitesdemploienligne == 0) && $status->montant1 == 'non'){
         $montant1='';
           $montantcanal1='';
         }elseif(($status->sitesdemploienligne !== 0) && $status->montant1 !== 'non'){
         $montant1 = $status->sitesdemploienligne;
          $montantcanal1= $status->montant1;
         }

         if(($status->reseauxsociaux == 0) && $status->montant2 == 'non'){
          $montant2='';
           $montantcanal2='';
         }elseif(($status->reseauxsociaux !== 0) && $status->montant2 !== 'non' ){
          $montant2= $status->reseauxsociaux;
          $montantcanal2= $status->montant2;
         }

         if(($status->siteswebdentreprise == 0) && $status->montant3 == 'non'){
          $montant3='';
           $montantcanal3='';
         }elseif(($status->siteswebdentreprise !== 0) &&$status->montant3 !== 'non' ){
          $montant3= $status->siteswebdentreprise;
          $montantcanal3= $status->montant3;
         }

         if(($status->agencesderecrutement == 0) && $status->montant4 == 'non'){
          $montant4='';
           $montantcanal4='';
         }elseif(($status->agencesderecrutement !== 0) && $status->montant4 !== 'non'){
          $montant4= $status->agencesderecrutement;
          $montantcanal4= $status->montant4;
         }

         if(($status->forumsetgroupesspecialises == 0) && $status->montant5 == 'non'){
          $montant5='';
           $montantcanal5='';
         }elseif(($status->forumsetgroupesspecialises !== 0) && $status->montant5 !== 'non'){
          $montant5= $status->forumsetgroupesspecialises;
          $montantcanal5= $status->montant5;
         }

         if(($status->journauxetmagazines == 0) && $status->montant6 == 'non'){
          $montant6='';
           $montantcanal6='';
         }elseif(($status->journauxetmagazines !== 0) && $status->montant6 !== 'non'){
          $montant6= $status->journauxetmagazines;
          $montantcanal6= $status->montant6;
         }

         if(($status->ecolesetuniversites == 0) && $status->montant7 == 'non'){
          $montant7='';
           $montantcanal7='';
         }elseif(($status->ecolesetuniversites !== 0) && $status->montant7 !== 'non'){
          $montnat7= $status->ecolesetuniversites;
          $montantcanal7= $status->montant7;
         }

         if(($status->evenementsderecrutement == 0) && $status->montant8 == 'non'){
          $montant8='';
           $montantcanal8='';
         }elseif(($status->evenementsderecrutement !== 0) && $status->montant8 !== 'non'){
          $montant8= $status->evenementsderecrutement;
          $montantcanal8= $status->montant8;
         }

         if(($status->bulletinsinternes == 0) && $status->montant9 == 'non'){
          $montant9='';
           $montantcanal9='';
         }elseif(($status->bulletinsinternes !== 0) &&  $status->montant9 !== 'non'){
          $montant9= $status->bulletinsinternes;
          $montantcanal9= $status->montant9;
         }

         if(($status->recrutementdirecte == 0) && $status->montant10 == 'non'){
          $montant10='';
           $montantcanal10='';
         }elseif(($status->recrutementdirecte !== 0) && $status->montant10 !== 'non'){
          $montant10= $status->recrutementdirecte ;
          $montantcanal10= $status->montant10;
         }








         if($statuss->composanteun == 'non'){
          $composanteun='';
        }elseif($statuss->composanteun !== 'non'){
        $composanteun=$statuss->composanteun;
        }
        if($statuss->composantedeux == 'non'){
        $composantedeux='';
        }elseif($statuss->composantedeux !== 'non'){
        $composantedeux=$statuss->composantedeux;
        }
        if($statuss->composantetrois == 'non'){
        $composantetrois='';
        }elseif($statuss->composantetrois !== 'non'){
        $composantetrois=$statuss->composantetrois;
        }
        if($statuss->composantequatre == 'non'){
        $composantequatre='';
        }elseif($statuss->composantequatre !== 'non'){
        $composantequatre=$statuss->composantequatre;
        }
        if($statuss->composantecinq == 'non'){
        $composantecinq='';
        }elseif($statuss->composantecinq !== 'non'){
        $composantecinq=$statuss->composantecinq;
        }
        if($statuss->composantesix == 'non'){
        $composantesix='';
        }elseif($statuss->composantesix !== 'non'){
        $composantesix=$statuss->composantesix;
        }
        if($statuss->composantesept == 'non'){
        $composantesept='';
        }elseif($statuss->composantesept !== 'non'){
        $composantesept=$statuss->composantesept;
        }
        if($statuss->composantehuit == 'non'){
        $composantehuit='';
        }elseif($statuss->composantehuit !== 'non'){
        $composantehuit=$statuss->composantehuit;
        }
        if($statuss->composanteneuf == 'non'){
        $composanteneuf='';
        }elseif($statuss->composanteneuf !== 'non'){
        $composanteneuf=$statuss->composanteneuf;
        }
        if($statuss->composantedix == 'non'){
        $composantedix='';
        }elseif($statuss->composantedix !== 'non'){
        $composantedix=$statuss->composantedix;
        }
        

        if($statuss->valeurun == 0){
          $valeurun='';
        }elseif($statuss->valeurun !== 0){
        $valeurun=$statuss->valeurun;
        }
        if($statuss->valeurdeux == 0){
        $valeurdeux='';
        }elseif($statuss->valeurdeux !== 0){
        $valeurdeux=$statuss->valeurdeux;
        }
        if($statuss->valeurtrois == 0){
        $valeurtrois='';
        }elseif($statuss->valeurtrois !== 0){
        $valeurtrois=$statuss->valeurtrois;
        }
        if($statuss->valeurquatre == 0){
        $valeurquatre='';
        }elseif($statuss->valeurquatre !== 0){
        $valeurquatre=$statuss->valeurquatre;
        }
        if($statuss->valeurcinq == 0){
        $valeurcinq='';
        }elseif($statuss->valeurcinq !== 0){
        $valeurcinq=$statuss->valeurcinq;
        }
        if($statuss->valeursix == 0){
        $valeursix='';
        }elseif($statuss->valeursix !== 0){
        $valeursix=$statuss->valeursix;
        }
        if($statuss->valeursept == 0){
        $valeursept='';
        }elseif($statuss->valeursept !== 0){
        $valeursept=$statuss->valeursept;
        }
        if($statuss->valeurhuit == 0){
        $valeurhuit='';
        }elseif($statuss->valeurhuit !== 0){
        $valeurhuit=$statuss->valeurhuit;
        }
        if($statuss->valeurneuf == 0){
        $valeurneuf='';
        }elseif($statuss->valeurneuf !== 0){
        $valeurneuf=$statuss->valeurneuf;
        }
        if($statuss->valeurdix == 0){
        $valeurdix='';
        }elseif($statuss->valeurdix !== 0){
        $valeurdix=$statuss->valeurdix;
        }
        $coutembaucheparemploye = ($status->sitesdemploienligne + $status->reseauxsociaux + $status->siteswebdentreprise + $status->agencesderecrutement +
        $status->forumsetgroupesspecialises + $status->journauxetmagazines + $status->ecolesetuniversites + $status->evenementsderecrutement + $status->bulletinsinternes +
        $status->recrutementdirecte + $statuss->valeurun +  $statuss->valeurdeux +  $statuss->valeurtrois +  $statuss->valeurquatre +  $statuss->valeurcinq +  $statuss->valeursix +
        $statuss->valeursept +  $statuss->valeurhuit +  $statuss->valeurneuf +  $statuss->valeurdix 
        );
       $employes = User::where('id','=',$employe->id)->first();
        $firstEntry = DB::table('users')->where('societe', '=', Auth::user()->societe)->oldest('id')->first();
      
        return view('configurercoutembaucheparemploye', 
        [
         $id,
         'employes'=>$employes,
         'coutembaucheparemploye'=>$coutembaucheparemploye,
        'recup'=>$recup,
        'recups'=>$recups,
        'montantcanal1'=>$montantcanal1,
        'montantcanal2'=>$montantcanal2,
        'montantcanal3'=>$montantcanal3,
        'montantcanal4'=>$montantcanal4,
        'montantcanal5'=>$montantcanal5,
        'montantcanal6'=>$montantcanal6,
        'montantcanal7'=>$montantcanal7,
        'montantcanal8'=>$montantcanal8,
        'montantcanal9'=>$montantcanal9,
        'montantcanal10'=>$montantcanal10,
        'montant1'=>$montant1,
        'montant2'=>$montant2,
        'montant3'=>$montant3,
        'montant4'=>$montant4,
        'montant5'=>$montant5,
        'montant6'=>$montant6,
        'montant7'=>$montant7,
        'montant8'=>$montant8,
        'montant9'=>$montant9,
        'montant10'=>$montant10,
        'montant'=>$montant,
        'montants'=>$montants,
        'composanteun'=>$composanteun,
        'composantedeux'=>$composantedeux,
        'composantetrois'=>$composantetrois,
        'composantequatre'=>$composantequatre,
        'composantecinq'=>$composantecinq,
        'composantesix'=>$composantesix,
        'composantesept'=>$composantesept,
        'composantehuit'=>$composantehuit,
        'composanteneuf'=>$composanteneuf,
        'composantedix'=>$composantedix,
        'valeurun'=>$valeurun,
        'valeurdeux'=>$valeurdeux,
        'valeurtrois'=>$valeurtrois,
        'valeurquatre'=>$valeurquatre,
        'valeurcinq'=>$valeurcinq,
        'valeursix'=>$valeursix,
        'valeursept'=>$valeursept,
        'valeurhuit'=>$valeurhuit,
        'valeurneuf'=>$valeurneuf,
        'valeurdix'=>$valeurdix]);
       }
     }


     public function addcoutembaucheemploye(Request $request, $id)
{
  if (Auth::user() === null) {


      return redirect()->route('welcome');
  } else {
     
     
$check = User::find($id);
$checkemail = $check->email;

$updss = CompteurCanalEmbauche::where('email','=',$checkemail)->first();


if($updss->status > 0){
$updss->status-= 1;
$updss->save();

}elseif($updss->status === 0){

}

$lavantages  = CoutEmbauche::where('email','=',$checkemail)->first();


if($request->canal == "Sites d'emploi en ligne"){
  $lavantages->update([
    'sitesdemploienligne'=>$request->composante,
    'montant1'=>$request->canal
  ]);
}elseif($request->canal == "Réseaux sociaux"){
  $lavantages->update([
    'reseauxsociaux'=>$request->composante,
    'montant2'=>$request->canal
  ]);
}elseif($request->canal == "Sites web d'entreprise"){
  $lavantages->update([
    'siteswebdentreprise'=>$request->composante,
    'montant3'=>$request->canal
  ]);
}elseif($request->canal == "Agences de recrutement"){
  $lavantages->update([
    'agencesderecrutement'=>$request->composante,
    'montant4'=>$request->canal
  ]);
}elseif($request->canal == "Forums et groupes spécialisés"){
  $lavantages->update([
    'forumsetgroupesspecialises'=>$request->composante,
    'montant5'=>$request->canal
  ]);
}elseif($request->canal == "Journaux et magazines"){
  $lavantages->update([
    'journauxetmagazines'=>$request->composante,
    'montant6'=>$request->canal
  ]);
}elseif($request->canal == "Écoles et universités"){
  $lavantages->update([
    'ecolesetuniversites'=>$request->composante,
    'montant7'=>$request->canal
  ]);
}elseif($request->canal == "Événements de recrutement"){
  $lavantages->update([
    'evenementsderecrutement'=>$request->composante,
    'montant8'=>$request->canal
  ]);
}elseif($request->canal == "Bulletins internes"){
  $lavantages->update([
    'bulletinsinternes'=>$request->composante,
    'montant9'=>$request->canal
  ]);
}elseif($request->canal == "Recrutement Dirercte"){
  $lavantages->update([
    'recrutementdirecte'=>$request->composante,
    'montant10'=>$request->canal
  ]);
}

      return redirect()->route('configurercoutembaucheparemploye',$id);
  }
}






public function addcoutembaucheemployes(Request $request, $id)
{
  if (Auth::user() === null) {


      return redirect()->route('welcome');
  } else {
     
     
$check = User::find($id);
$checkemail = $check->email;

$updss = CompteurCoutEmbauche::where('email','=',$checkemail)->first();

if($updss->status > 0){
$updss->status-= 1;
$updss->save();

}elseif($updss->status === 0){

}
$avantages  = AutresComposantesCoutEmbauche::where('email','=',$checkemail)->first();



 if ($avantages->valeurun == 0) {
  // La colonne status1 est null 
 $avantages->update([
  'valeurun'=> $request->cout,
 ]);
} elseif(($avantages->valeurun !== 0) && ($avantages->valeurdeux==0)) {
 $avantages->update([
      'valeurdeux'=> $request->cout
     ]);
}
elseif(($avantages->valeurun !==0) && ($avantages->valeurdeux !==0) && ($avantages->valeurtrois ==0)) {
  $avantages->update([
      'valeurtrois'=> $request->cout
     ]);
}
elseif(($avantages->valeureun !==0) && ($avantages->valeurdeux !==0) && ($avantages->valeurtrois !==0) && ($avantages->valeurquatre ==0)) {
  $avantages->update([
      'valeurquatre'=> $request->cout
     ]);
}
elseif(($avantages->valeurun !==0) && ($avantages->valeurdeux !==0) && ($avantages->valeurtrois !==0) && ($avantages->valeurquatre !==0) && ($avantages->valeurcinq ==0)) {
  $avantages->update([
      'valeurcinq'=> $request->cout
     ]);
}
elseif(($avantages->valeureun !==0) && ($avantages->valeurdeux !==0) && ($avantages->valeurtrois !==0) && ($avantages->valeurquatre !==0) && ($avantages->valeurcinq !==0) && ($avantages->valeursix ==0)) {
  $avantages->update([
      'valeursix'=> $request->cout
     ]);
}
elseif(($avantages->valeurun !==0) && ($avantages->valeurdeux !==0) && ($avantages->valeurtrois !==0) && ($avantages->valeurquatre!==0) && ($avatnages->valeurcinq !==0) && ($avantages->valeursix !==0) && ($avantages->valeursept ==0)) {
  $avantages->update([
      'valeursept'=> $request->cout
     ]);
}
elseif(($avantages->valeurun !==0) && ($avantages->valeurdeux !==0) && ($avantages->valeurtrois !==0) && ($avantages->valeurquatre !==0)&& ($avantages->valeurcinq !==0) && ($avantages->valeursix !==0) && ($avantages->valeursept !==0) && ($avantages->valeurhuit ==0)) {
  $avantages->update([
      'valeurhuit'=> $request->cout
     ]);
}
elseif(($avantages->valeurun !==0) && ($avantages->valeurdeux !==0) && ($avantages->valeurtrois !==0) && ($avantages->valeurquatre !==0) && ($avantages->valeurcinq !==0) && ($avantages->valeursix !==0) && ($avantages->cvaleursept !==0) && ($avantages->valeurhuit !==0) && ($avantages->valeurneuf ==0)) {
  $avantages->update([
      'valeurneuf'=> $request->cout
     ]);
}
elseif (($avanatges->valeurun !==0) && ($avanatges->valeurdeux !==0) && ($avantages->valeurtrois !==0) && ($avantages->valeurquatre !==0) && ($avantages->valeurcinq !==0) && ($avantages->valeursix !==0) && ($avantages->valeursept !==0) && ($avanatges->valeurhuit !==0) && ($avanatges->valeurneuf !==0) && ($avantages->valeurdix ==0)) {
  $avantages->update([
      'valeurdix'=> $request->cout
     ]);
}


if ($avantages->composanteun == 'non') {
  // La colonne status1 est null 
 $avantages->update([
  'composanteun'=> $request->origine,
 ]);
} elseif(($avantages->composanteun !== 'non') && ($avantages->composantedeux=='non')) {
 $avantages->update([
      'composantedeux'=> $request->origine
     ]);
}
elseif(($avantages->composanteun !=='non') && ($avantages->composantedeux !=='non') && ($avantages->composantetrois =='non')) {
  $avantages->update([
      'composantetrois'=> $request->origine
     ]);
}
elseif(($avantages->composanteun !=='non') && ($avantages->composantedeux !=='non') && ($avantages->composantetrois !=='non') && ($avantages->composantequatre =='non')) {
  $avantages->update([
      'composantequatre'=> $request->origine
     ]);
}
elseif(($avantages->composanteun !=='non') && ($avantages->composantedeux !=='non') && ($avantages->composantetrois !=='non') && ($avantages->composantequatre !=='non') && ($avantages->composantecinq =='non')) {
  $avantages->update([
      'composantecinq'=> $request->origine
     ]);
}
elseif(($avantages->composanteun !=='non') && ($avantages->composantedeux !=='non') && ($avantages->composantetrois !=='non') && ($avantages->composantequatre !=='non') && ($avantages->composantecinq !=='non') && ($avantages->composantesix =='non')) {
  $avantages->update([
      'composantesix'=> $request->origine
     ]);
}
elseif(($avantages->composanteun !=='non') && ($avantages->composantedeux !=='non') && ($avantages->composantetrois !=='non') && ($avantages->composantequatre!=='non') && ($avatnages->composantecinq !=='non') && ($avantages->composantesix !=='non') && ($avantages->composantesept =='non')) {
  $avantages->update([
      'composantesept'=> $request->origine
     ]);
}
elseif(($avantages->composanteun !=='non') && ($avantages->composantedeux !=='non') && ($avantages->composantetrois !=='non') && ($avantages->composantequatre !=='non')&& ($avantages->composantecinq !=='non') && ($avantages->composantesix !=='non') && ($avantages->composantesept !=='non') && ($avantages->composantehuit =='non')) {
  $avantages->update([
      'composantehuit'=> $request->origine
     ]);
}
elseif(($avantages->composanteun !=='non') && ($avantages->composantedeux !=='non') && ($avantages->composantetrois !=='non') && ($avantages->composantequatre !=='non') && ($avantages->composantecinq !=='non') && ($avantages->composantesix !=='non') && ($avantages->composantesept !=='non') && ($avantages->composantehuit !=='non') && ($avantages->composanteneuf =='non')) {
  $avantages->update([
      'composanteneuf'=> $request->origine
     ]);
}
elseif (($avanatges->composanteun !=='non') && ($avanatges->composantedeux !=='non') && ($avantages->composantetrois !=='non') && ($avantages->composantequatre !=='non') && ($avantages->composantecinq !=='non') && ($avantages->composantesix !=='non') && ($avantages->composantesept !=='non') && ($avanatges->composantehuit !=='non') && ($avanatges->composanteneuf !=='non') && ($avantages->composantedix =='non')) {
  $avantages->update([
      'composantedix'=> $request->origine
     ]);
}

      return redirect()->route('configurercoutembaucheparemploye',$id);
  }
}

}
