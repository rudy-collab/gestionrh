<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use App\Models\Candidat;
use App\Models\OffreEmploi;
use Illuminate\Http\Request;
use App\Models\ReponsesSondage;
use App\Models\QuestionsSondage;
use Wavey\Sweetalert\Sweetalert;
use App\Models\AvantagesCandidat;
use App\Models\CanauxRecrutements;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\LesMissionDesCandidats;
use App\Models\CompteurMissionCandidat;
use App\Models\CompteurAvantageCandidat;
use App\Events\UpdateStatusReponseSondage;

class FormulaireSondageController extends Controller
{
    //formulaire songdage

    public function formulairesondage($id)
    {
       
        $data=Candidat::find($id);
      

      return view('formulairesondage',compact('data'));
    }


       //creation reponse sondage
   public function formulairesondageAll(Request $request,$id){
    
   

   
   if (Auth::user() === null) {
 
 
    return redirect()->route('welcome');
}
   {
if(Auth::user()->admin === 'Admin'){
 
  $firstEntry = DB::table('canaux_recrutements')->where('user_id', '=', Auth::user()->id)->oldest('id')->first();
 
      $request->validate([
        'un' => ['required'],
        'deux' => ['required'],
        'trois' => ['required'],
        'quatre' => ['required'],
        'cinq'=>['required'],
        'six' => ['required'],
        'sept' => ['required'],
        'huit' => ['required'],
        'neuf' => ['required'],
        'dix'=>['required'],
        'onze' => ['required'],
        'douze' => ['required'],
        'treize' => ['required'],
        'quatorze' => ['required'],
        'quinze'=>['required'],

    ]);

  
   $recup = Candidat::find($id);
   $recups = $recup->id;
  
$recupere = Candidat::where('id','=',$recups)->first();


  ReponsesSondage::create(
      [
        'reponse1'=>$request->un,
        'reponse2'=>$request->deux,
         'reponse3'=>$request->trois,
         'reponse4'=>$request->quatre,
         'reponse5'=>$request->cinq ,
        'reponse6'=>$request->six,
        'reponse7'=>$request->sept,
        'reponse8'=>$request->huit,
         'reponse9'=>$request->neuf,
         'reponse10'=>$request->dix,
         'reponse11'=>$request->onze ,
        'reponse12'=>$request->douze,
        'reponse13'=>$request->treize,
        'reponse14'=>$request->quatorze ,
       'reponse15'=>$request->quinze,
        'candidat_id'=>$request->id,
        'user_id'=>$recupere->user_id,
        
      ]
      );

      $offres= ReponsesSondage::orderBy('id', 'desc')->first();
     
      $firstEntry = DB::table('canaux_recrutements')->where('user_id', '=', Auth::user()->id)->oldest('id')->first();
      $numb = 0;

  if($request->quinze === "Sites d'emploi en ligne"){
    $recup = Candidat::find($id);
   
    CanauxRecrutements::create([
      'sitesdemploienligne'=>$numb=$numb+1,
      'user_id'=>$recupere->user_id,
      'candidat_id'=>$recups
    ]);
  }elseif($request->quinze === "Réseaux sociaux"){
    $recup = Candidat::find($id);
    $recups = $recup->id;
    CanauxRecrutements::create([
      'reseauxsociaux'=>$numb=$numb+1,
      'user_id'=>$recupere->user_id,
      'candidat_id'=>$recups
    ]);
  }elseif($request->quinze === "Sites web d'entreprise"){
    $recup = Candidat::find($id);
    $recups = $recup->id;
    CanauxRecrutements::create([
      'siteswebdentreprise'=>$numb=$numb+1,
      'user_id'=>$recupere->user_id,
      'candidat_id'=>$recups
    ]);
  }elseif($request->quinze === "Agences de recrutement"){
    $recup = Candidat::find($id);
    $recups = $recup->id;
    CanauxRecrutements::create([
      'agencesderecrutement'=>$numb=$numb+1,
      'user_id'=>$recupere->user_id,
      'candidat_id'=>$recups
    ]);
  }elseif($request->quinze === "Forums et groupes spécialisés"){
    $recup = Candidat::find($id);
    $recups = $recup->id;
    CanauxRecrutements::create([
      'forumsetgroupesspecialises'=>$numb=$numb+1,
      'user_id'=>$recupere->user_id,
      'candidat_id'=>$recups
    ]);
  }elseif($request->quinze === "Journaux et magazines"){
    $recup = Candidat::find($id);
    $recups = $recup->id;
    CanauxRecrutements::create([
      'journauxetmagazines'=>$numb=$numb+1,
      'user_id'=>$recupere->user_id,
      'candidat_id'=>$recups
    ]);
  }elseif($request->quinze === "Écoles et universités"){
    $recup = Candidat::find($id);
    $recups = $recup->id;
    CanauxRecrutements::create([
      'ecolesetuniversites'=>$numb=$numb+1,
      'user_id'=>$recupere->user_id,
      'candidat_id'=>$recups
    ]);
  }elseif($request->quinze === "Événements de recrutement"){
    $recup = Candidat::find($id);
    $recups = $recup->id;
    CanauxRecrutements::create([
      'evenementsderecrutement'=>$numb=$numb+1,
      'user_id'=>$recupere->user_id,
      'candidat_id'=>$recups
    ]);
  }
  elseif($request->quinze === "Partenariats avec des associations professionnelles"){
    $recup = Candidat::find($id);
    $recups = $recup->id;
    CanauxRecrutements::create([
      'partenariatsavecassociationspro'=>$numb=$numb+1,
      'user_id'=>$recupere->user_id,
      'candidat_id'=>$recups
    ]);
  }

  

 
      $data=Candidat::find($id);
    
      CompteurMissionCandidat::create([
        'status'=>10,
        'user_id'=>$recupere->user_id,
        'candidat_id'=>$data->id,
        'email'=>$data->email
    
      ]);
      CompteurAvantageCandidat::create([
        'status'=>10 ,
        'user_id'=>$recupere->user_id,
        'candidat_id'=>$data->id,
        'email'=>$data->email
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
        'candidat_id'=>$data->id,
        'user_id'=>$recupere->user_id,
        'email'=>$data->email
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
        'candidat_id'=>$data->id,
        'user_id'=>$recupere->user_id,
        'email'=>$data->email
      ]);
      $data->update([
          'name' => $request->name,
          'prenom' => $request->prenom,
          'telephone' => $request->telephone,
          'email' => $request->email,
          'cv' => $request->cv,
         
          'offre_id'=>$request->offre_id,
          'user_id'=>$request->user_id,
          'reponse_id'=> $offres->id,
          'reponsesondage'=>'oui'
        
        ]);


      Sweetalert::success('merci...', 'Vos informations ont bien été enregistrées ');
      return view('formulairesondage',compact('data'));
 
        
     }elseif((Auth::user()->admin === 'Pas Admin') && (Auth::user()->permission === 'aucune')){

 
      $request->validate([
        'un' => ['required'],
        'deux' => ['required'],
        'trois' => ['required'],
        'quatre' => ['required'],
        'cinq'=>['required'],
        'six' => ['required'],
        'sept' => ['required'],
        'huit' => ['required'],
        'neuf' => ['required'],
        'dix'=>['required'],
        'onze' => ['required'],
        'douze' => ['required'],
        'treize' => ['required'],
        'quatorze' => ['required'],
        'quinze'=>['required'],

    ]);

  
   $recup = Candidat::find($id);
   $recups = $recup->id;
  
$recupere = Candidat::where('id','=',$recups)->first();


  ReponsesSondage::create(
      [
        'reponse1'=>$request->un,
        'reponse2'=>$request->deux,
         'reponse3'=>$request->trois,
         'reponse4'=>$request->quatre,
         'reponse5'=>$request->cinq ,
        'reponse6'=>$request->six,
        'reponse7'=>$request->sept,
        'reponse8'=>$request->huit,
         'reponse9'=>$request->neuf,
         'reponse10'=>$request->dix,
         'reponse11'=>$request->onze ,
        'reponse12'=>$request->douze,
        'reponse13'=>$request->treize,
        'reponse14'=>$request->quatorze ,
       'reponse15'=>$request->quinze,
        'candidat_id'=>$request->id,
        'user_id'=>$recupere->user_id
      ]
      );

      $offres= ReponsesSondage::orderBy('id', 'desc')->first();
     

      $numb = 0;

      if($request->quinze === "Sites d'emploi en ligne"){
        $recup = Candidat::find($id);
        $recups = $recup->id;
        CanauxRecrutements::create([
          'sitesdemploienligne'=>$numb=$numb+1,
          'user_id'=>$recupere->user_id,
          'candidat_id'=>$recups
        ]);
      }elseif($request->quinze === "Réseaux sociaux"){
        $recup = Candidat::find($id);
        $recups = $recup->id;
        CanauxRecrutements::create([
          'reseauxsociaux'=>$numb=$numb+1,
          'user_id'=>$recupere->user_id,
          'candidat_id'=>$recups
        ]);
      }elseif($request->quinze === "Sites web d'entreprise"){
        $recup = Candidat::find($id);
        $recups = $recup->id;
        CanauxRecrutements::create([
          'siteswebdentreprise'=>$numb=$numb+1,
          'user_id'=>$recupere->user_id,
          'candidat_id'=>$recups
        ]);
      }elseif($request->quinze === "Agences de recrutement"){
        $recup = Candidat::find($id);
        $recups = $recup->id;
        CanauxRecrutements::create([
          'agencesderecrutement'=>$numb=$numb+1,
          'user_id'=>$recupere->user_id,
          'candidat_id'=>$recups
        ]);
      }elseif($request->quinze === "Forums et groupes spécialisés"){
        $recup = Candidat::find($id);
        $recups = $recup->id;
        CanauxRecrutements::create([
          'forumsetgroupesspecialises'=>$numb=$numb+1,
          'user_id'=>$recupere->user_id,
          'candidat_id'=>$recups
        ]);
      }elseif($request->quinze === "Journaux et magazines"){
        $recup = Candidat::find($id);
        $recups = $recup->id;
        CanauxRecrutements::create([
          'journauxetmagazines'=>$numb=$numb+1,
          'user_id'=>$recupere->user_id,
          'candidat_id'=>$recups
        ]);
      }elseif($request->quinze === "Écoles et universités"){
        $recup = Candidat::find($id);
        $recups = $recup->id;
        CanauxRecrutements::create([
          'ecolesetuniversites'=>$numb=$numb+1,
          'user_id'=>$recupere->user_id,
          'candidat_id'=>$recups
        ]);
      }elseif($request->quinze === "Événements de recrutement"){
        $recup = Candidat::find($id);
        $recups = $recup->id;
        CanauxRecrutements::create([
          'evenementsderecrutement'=>$numb=$numb+1,
          'user_id'=>$recupere->user_id,
          'candidat_id'=>$recups
        ]);
      }
      elseif($request->quinze === "Partenariats avec des associations professionnelles"){
        $recup = Candidat::find($id);
        $recups = $recup->id;
        CanauxRecrutements::create([
          'partenariatsavecassociationspro'=>$numb=$numb+1,
          'user_id'=>$recupere->user_id,
          'candidat_id'=>$recups
        ]);
      }

 
      $data=Candidat::find($id);
      
      CompteurMissionCandidat::create([
        'status'=>10,
        'user_id'=>$recupere->user_id,
        'candidat_id'=>$data->id,
        'email'=>$data->email
    
      ]);
      CompteurAvantageCandidat::create([
        'status'=>10 ,
        'user_id'=>$recupere->user_id,
        'candidat_id'=>$data->id,
        'email'=>$data->email
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
        'candidat_id'=>$data->id,
        'user_id'=>$recupere->user_id,
        'email'=>$data->email
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
        'candidat_id'=>$data->id,
        'user_id'=>$recupere->user_id,
        'email'=>$data->email
      ]);
     
      $data->update([
          'name' => $request->name,
          'prenom' => $request->prenom,
          'telephone' => $request->telephone,
          'email' => $request->email,
          'cv' => $request->cv,
          'selectionne' => $request->selectionne,
          'offre_id'=>$request->offre_id,
          'user_id'=>$request->user_id,
          'reponse_id'=> $offres->id,
          'reponsesondage'=>'oui'
        
        ]);


      Sweetalert::success('merci...', 'Vos informations ont bien été enregistrées ');
      return view('formulairesondage',compact('data'));
     }elseif((Auth::user()->admin === 'Pas Admin') && (Auth::user()->permission === 'Responsable Recrutement')){

      $request->validate([
        'un' => ['required'],
        'deux' => ['required'],
        'trois' => ['required'],
        'quatre' => ['required'],
        'cinq'=>['required'],
        'six' => ['required'],
        'sept' => ['required'],
        'huit' => ['required'],
        'neuf' => ['required'],
        'dix'=>['required'],
        'onze' => ['required'],
        'douze' => ['required'],
        'treize' => ['required'],
        'quatorze' => ['required'],
        'quinze'=>['required'],

    ]);

  
   $recup = Candidat::find($id);
   $recups = $recup->id;
  
$recupere = Candidat::where('id','=',$recups)->first();


  ReponsesSondage::create(
      [
        'reponse1'=>$request->un,
        'reponse2'=>$request->deux,
         'reponse3'=>$request->trois,
         'reponse4'=>$request->quatre,
         'reponse5'=>$request->cinq ,
        'reponse6'=>$request->six,
        'reponse7'=>$request->sept,
        'reponse8'=>$request->huit,
         'reponse9'=>$request->neuf,
         'reponse10'=>$request->dix,
         'reponse11'=>$request->onze ,
        'reponse12'=>$request->douze,
        'reponse13'=>$request->treize,
        'reponse14'=>$request->quatorze ,
       'reponse15'=>$request->quinze,
        'candidat_id'=>$request->id,
        'user_id'=>$recupere->user_id
      ]
      );

      $offres= ReponsesSondage::orderBy('id', 'desc')->first();
     

      $numb = 0;

   

      if($request->quinze === "Sites d'emploi en ligne"){
        $recup = Candidat::find($id);
        $recups = $recup->id;
        CanauxRecrutements::create([
          'sitesdemploienligne'=>$numb=$numb+1,
          'user_id'=>$recupere->user_id,
          'candidat_id'=>$recups
        ]);
      }elseif($request->quinze === "Réseaux sociaux"){
        $recup = Candidat::find($id);
        $recups = $recup->id;
        CanauxRecrutements::create([
          'reseauxsociaux'=>$numb=$numb+1,
          'user_id'=>$recupere->user_id,
          'candidat_id'=>$recups
        ]);
      }elseif($request->quinze === "Sites web d'entreprise"){
        $recup = Candidat::find($id);
        $recups = $recup->id;
        CanauxRecrutements::create([
          'siteswebdentreprise'=>$numb=$numb+1,
          'user_id'=>$recupere->user_id,
          'candidat_id'=>$recups
        ]);
      }elseif($request->quinze === "Agences de recrutement"){
        $recup = Candidat::find($id);
        $recups = $recup->id;
        CanauxRecrutements::create([
          'agencesderecrutement'=>$numb=$numb+1,
          'user_id'=>$recupere->user_id,
          'candidat_id'=>$recups
        ]);
      }elseif($request->quinze === "Forums et groupes spécialisés"){
        $recup = Candidat::find($id);
        $recups = $recup->id;
        CanauxRecrutements::create([
          'forumsetgroupesspecialises'=>$numb=$numb+1,
          'user_id'=>$recupere->user_id,
          'candidat_id'=>$recups
        ]);
      }elseif($request->quinze === "Journaux et magazines"){
        $recup = Candidat::find($id);
        $recups = $recup->id;
        CanauxRecrutements::create([
          'journauxetmagazines'=>$numb=$numb+1,
          'user_id'=>$recupere->user_id,
          'candidat_id'=>$recups
        ]);
      }elseif($request->quinze === "Écoles et universités"){
        $recup = Candidat::find($id);
        $recups = $recup->id;
        CanauxRecrutements::create([
          'ecolesetuniversites'=>$numb=$numb+1,
          'user_id'=>$recupere->user_id,
          'candidat_id'=>$recups
        ]);
      }elseif($request->quinze === "Événements de recrutement"){
        $recup = Candidat::find($id);
        $recups = $recup->id;
        CanauxRecrutements::create([
          'evenementsderecrutement'=>$numb=$numb+1,
          'user_id'=>$recupere->user_id,
          'candidat_id'=>$recups
        ]);
      }
      elseif($request->quinze === "Partenariats avec des associations professionnelles"){
        $recup = Candidat::find($id);
        $recups = $recup->id;
        CanauxRecrutements::create([
          'partenariatsavecassociationspro'=>$numb=$numb+1,
          'user_id'=>$recupere->user_id,
          'candidat_id'=>$recups
        ]);
      }

 
      $data=Candidat::find($id);
      CompteurMissionCandidat::create([
        'status'=>10,
        'user_id'=>$recupere->user_id,
        'candidat_id'=>$data->id,
        'email'=>$data->email
    
      ]);
      CompteurAvantageCandidat::create([
        'status'=>10 ,
        'user_id'=>$recupere->user_id,
        'candidat_id'=>$data->id,
        'email'=>$data->email
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
        'candidat_id'=>$data->id,
        'user_id'=>$recupere->user_id,
        'email'=>$data->email
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
        'candidat_id'=>$data->id,
        'user_id'=>$recupere->user_id,
        'email'=>$data->email
      ]);
     
      $data->update([
          'name' => $request->name,
          'prenom' => $request->prenom,
          'telephone' => $request->telephone,
          'email' => $request->email,
          'cv' => $request->cv,
          'selectionne' => $request->selectionne,
          'offre_id'=>$request->offre_id,
          'user_id'=>$request->user_id,
          'reponse_id'=> $offres->id,
          'reponsesondage'=>'oui'
        
        ]);


      Sweetalert::success('merci...', 'Vos informations ont bien été enregistrées ');
      return view('formulairesondage',compact('data'));
     }
   }
  }

        //tout les sondages candidats
        public function toutlessondagescandidats()
        {
         
          if (Auth::user() === null) {
      
      
              return redirect()->route('welcome');
          } elseif((Auth::user()->admin ==='Admin')) {
            $firstEntry = DB::table('candidats')->where('user_id', '=', Auth::user()->id)->oldest('id')->first();
          
          
           $candidats = Candidat::where('user_id','=',Auth::user()->id)->where('reponse_id','!=',null)->orderBy('id', 'desc')->with('offreemploi')->paginate(3);
          
        
       
              return view('toutlessondagescandidats',compact('candidats','firstEntry'));
          }elseif(((Auth::user()->admin ==='Pas Admin')) && (Auth::user()->permission ==='aucune')){
            $firstEntry = DB::table('candidats')->where('user_id', '=', Auth::user()->id)->oldest('id')->first();
          
           $candidats = Candidat::where('user_id','=',Auth::user()->id)->where('reponse_id','!=',null)->orderBy('id', 'desc')->with('offreemploi')->paginate(3);
          
        
       
           return view('toutlessondagescandidats',compact('candidats','firstEntry'));
          }elseif(((Auth::user()->admin ==='Pas Admin')) && (Auth::user()->permission ==='Responsable Recrutement')){
            $firstEntry = DB::table('candidats')->where('user_id', '=', Auth::user()->idadmin)->oldest('id')->first();
            $candidats = Candidat::where('user_id','=',Auth::user()->idadmin)->where('reponse_id','!=',null)->orderBy('id', 'desc')->with('offreemploi')->paginate(3);
            return view('toutlessondagescandidats',compact('candidats','firstEntry'));
          }
        }


         //update sondage candidat
         public function updatesondagecandidat($id)
         {
           if (Auth::user() === null) {
       
       
               return redirect()->route('welcome');
           } else {
         
  
           
            $cand = Candidat::find($id);
            $candidat->update([
              'reponsesondage'=>'non'
            ]);
        
               return redirect()->route('reponsesondageparcandidat',compact('cand'));
           }
         }

         // reponse sondage candidat
         public function reponsesondageparcandidat($id)
         {
           if (Auth::user() === null) {
       
       
               return redirect()->route('welcome');
           } else {
     
            $cand = Candidat::find($id);
            $candId = $cand->id;
            $cands = Candidat::where('id','=',$candId)->first();
         
            
            //$candidats = Candidat::where('user_id','=',Auth::user()->id)->orderBy('id', 'desc')->paginate(4);
          $reps=$cand->reponse_id;
          $dateDuJourFormat = Carbon::now()->toDateString();
          $reponses = ReponsesSondage::where('id','=',$reps)->first();

         
          event(new UpdateStatusReponseSondage($id));
               return view('reponsesondageparcandidat',compact('cand','reponses','dateDuJourFormat','cands'));
           }
         }

          // contrat candidat
          public function propositioncontratcandidat($id)
          {
            if (Auth::user() === null) {
        
        
                return redirect()->route('welcome');
            } else {
      
             $cand = Candidat::find($id);
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
             $recup = CompteurMissionCandidat::where('user_id','=',$cand->user_id)->where('candidat_id','=',$cand->id)->first();
            

             if($recup->status == 10){
              $montant ='Configurez les missions...vous pouvez en ajouter' .' '.$recup->status .' '.'maximum';
             }elseif(($recup->status < 10) && ($recup->status > 0) ){
              $montant ='Vous pouvez encore en ajouter' .' '.$recup->status;
             }
             elseif($recup ===0){
              $montant ='';
             }

             $recups = CompteurAvantageCandidat::where('user_id','=',$cand->user_id)->where('candidat_id','=',$cand->id)->first();

             if($recups->status == 10){
              $lavantage ='Configurez les avantages...vous pouvez en ajouter' .' '.$recups->status .' '.'maximum';
             }elseif(($recups->status < 10) && ($recups->status > 0) ){
              $lavantage ='Vous pouvez encore en ajouter' .' '.$recups->status;
             }
             elseif($recups ===0){
              $lavantage ='';
             }
             //$candidats = Candidat::where('user_id','=',Auth::user()->id)->orderBy('id', 'desc')->paginate(4);
           $reps=$cand->reponse_id;
           $dateDuJourFormat = Carbon::now()->toDateString();
           $status  = LesMissionDesCandidats::where('candidat_id','=',$cand->id)->where('user_id','=',$cand->user_id)->first();
           $statuss  = AvantagesCandidat::where('candidat_id','=',$cand->id)->where('user_id','=',$cand->user_id)->first();


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
           
                return view('propositioncontratcandidat',compact('cand','dateDuJourFormat','montant','mission1','mission2','mission3','mission4','mission5','mission6','mission7','mission8','mission9','mission10','lavantage','avantage1','avantage2','avantage3','avantage4','avantage5','avantage6','avantage7','avantage8','avantage9','avantage10'));
            }
          }
}
