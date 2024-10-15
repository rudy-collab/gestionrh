<?php

namespace App\Http\Controllers;


use App\Models\User;
use App\Models\Candidat;
use App\Models\OffreEmploi;
use Illuminate\Http\Request;
use App\Models\MissionCandidat;
use Wavey\Sweetalert\Sweetalert;
use App\Models\AvantagesCandidat;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\CompteurMissionCandidat;
use App\Models\CompteurAvantageCandidat;
use App\MyChangeVuCandidate\ChangeVuCandidate;
use App\Notifications\SendEmailSondageCandidat;




class RecrutementController extends Controller
{
      //recrutement
   public function recrutement()
   {
     if (Auth::user() === null) {
 
 
         return redirect()->route('welcome');
     } elseif((Auth::user()->owner == 'oui') )  {
   
    
      $candidats = Candidat::where('user_id','=',Auth::user()->id)->orderBy('id', 'desc')->with('offreemploi')->paginate(2);
      $exists = $candidats->contains(function ($candidat) {
        return $candidat->selectionne === 'non';
    });

    $existsdeux = $candidats->contains(function ($candidat) {
      return $candidat->reponsesondage === 'oui';
  });

         return view('recrutement',compact('candidats','exists','existsdeux'));
     } 
 
     elseif((Auth::user()->admin == 'Pas Admin') && (Auth::user()->permission == 'Responsable Recrutement')){
     $users = Auth::user()->id;
     
      $candidats = Candidat::where('user_id','=',Auth::user()->idadmin)->orderBy('id', 'desc')->with('offreemploi')->paginate(2);
      $exists = $candidats->contains(function ($candidat) {
        return $candidat->selectionne === 'non';
    });

    $existsdeux = $candidats->contains(function ($candidat) {
      return $candidat->reponsesondage === 'oui';
  });

         return view('recrutement',compact('candidats','exists','existsdeux'));
     }elseif((Auth::user()->admin == 'Pas Admin') && (Auth::user()->permission !== 'Responsable Recrutement')){
      Sweetalert::warning('crée avec success', 'Vous n\'avez pas acces å cette page ');
      return view('espaceemploye');
     }
   }

       //voir toutes les candidatures
       public function voirtouteslescandidatures()
       {
        
         if (Auth::user() === null) {
     
     
             return redirect()->route('welcome');
         } elseif((Auth::user()->owner === 'oui') ) {
          $firstEntry = DB::table('users')->where('id', '=', Auth::user()->id)->oldest('id')->first();
          $firstCandidat = DB::table('candidats')->where('user_id', '=', Auth::user()->id)->oldest('id')->first();
        $candidats = Candidat::where('user_id','=',Auth::user()->id)->orderBy('id', 'desc')->with('offreemploi')->paginate(4);
        $exists = $candidats->contains(function ($candidat) {
          return $candidat->selectionne === 'non';
      });
      
             return view('voirtouteslescandidatures',compact('candidats','exists','firstEntry','firstCandidat'));
         }
        
         
         elseif((Auth::user()->admin === 'Pas Admin')  && (Auth::user()->permission === 'Responsable Recrutement')){
          $firstEntry = DB::table('users')->where('idadmin', '=', Auth::user()->idadmin)->oldest('id')->first();
          $firstCandidat = DB::table('candidats')->where('user_id', '=', Auth::user()->idadmin)->oldest('id')->first();
          
          $candidats = Candidat::where('user_id','=',Auth::user()->idadmin)->orderBy('id', 'desc')->with('offreemploi')->paginate(4);
          $exists = $candidats->contains(function ($candidat) {
            return $candidat->selectionne === 'non';
        });
        
        
               return view('voirtouteslescandidatures',compact('candidats','exists','firstEntry','firstCandidat'));
         }
       }

   //creation offre emploi
   public function recrutementAll(Request $request)
   {


   $aleats='Ref - '.rand(000001,999999);
     if (Auth::user() === null) {
 
 
         return redirect()->route('welcome');
     } elseif(Auth::user()->admin === 'Admin') {
 
      $take=$request->all();

      $request->validate([
        'titre' => ['required'],
        'description' => ['required'],

    ]);

    OffreEmploi::create(
      [
        'titre'=>$request->titre,
        'description'=>$request->description,
         'reference'=>$aleats,
        'user_id'=>Auth::user()->id
      ]
      );


      Sweetalert::success('crée avec success', 'Offre Emploi ');
      return redirect()->route('voirlesoffresemplois');
 
        
     }elseif((Auth::user()->admin === 'Pas Admin') && (Auth::user()->permission === 'aucune')){
      $take=$request->all();

      $request->validate([
        'titre' => ['required'],
        'description' => ['required'],

    ]);

    OffreEmploi::create(
      [
        'titre'=>$request->titre,
        'description'=>$request->description,
         'reference'=>$aleats,
        'user_id'=>Auth::user()->id
      ]
      );


      Sweetalert::success('crée avec success', 'Offre Emploi ');
      return redirect()->route('voirlesoffresemplois');
     }
     elseif((Auth::user()->admin === 'Pas Admin') && (Auth::user()->permission === 'Responsable Recrutement')){
   
     $users = User::where('id','=',Auth::user()->id)->first();
   
 
      $take=$request->all();

      $request->validate([
        'titre' => ['required'],
        'description' => ['required'],

    ]);

    OffreEmploi::create(
      [
        'titre'=>$request->titre,
        'description'=>$request->description,
         'reference'=>$aleats,
        'user_id'=>$users->idadmin
      ]
      );


      Sweetalert::success('crée avec success', 'Offre Emploi ');
      return redirect()->route('voirlesoffresemplois');
     }
   }

   //voir les offres
   public function voirlesoffresemplois()
   {
   
    $lastEntry = DB::table('candidats')->where('user_id', '=', Auth::user()->id)->latest('id')->first();
    $lastEntrys = DB::table('candidats')->where('user_id', '=', Auth::user()->idadmin) ->latest('id')->first();
     if (Auth::user() === null) {
 
 
         return redirect()->route('welcome');
     }  elseif((Auth::user()->owner == 'oui'))  {
      $firstEntry = DB::table('users')->where('id', '=', Auth::user()->id)->oldest('id')->first();
      $firstEmploi = DB::table('offre_emplois')->where('user_id', '=', Auth::user()->id)->oldest('id')->first();
 
      $offres= OffreEmploi::where('user_id','=',Auth::user()->id )->orderBy('id', 'desc')->paginate(4);
 
         return view('voirlesoffresemplois',compact('offres','firstEntry','firstEmploi'));
     }

   
     
     elseif((Auth::user()->admin == 'Pas Admin') && (Auth::user()->permission == 'Responsable Recrutement')){
      $firstEntry = DB::table('users')->where('idadmin', '=', Auth::user()->idadmin)->oldest('id')->first();
      $firstEmploi = DB::table('offre_emplois')->where('user_id', '=', Auth::user()->idadmin)->oldest('id')->first();
      $offres= OffreEmploi::where('user_id','=',Auth::user()->idadmin )->orderBy('id', 'desc')->paginate(4);
 
      return view('voirlesoffresemplois',compact('offres','firstEntry','firstEmploi'));
     }
   }

    //updateAll
    public function updateoffreemploi(Request $request, $id = null)
    {
        $request->validate([
            'titre' => ['required'],
            'description'=>['required']

        ]);

        $recup = OffreEmploi::find($id);
        $recup->update([
            'titre' => $request->titre,
            'description' => $request->description,

        ]);

        
      Sweetalert::success('a été modifié avec succès', 'Cette offre Emploi ');
        return redirect()->route('voirlesoffresemplois', compact('recup'));
    }

    //get candidat id
    
      public function updatevucandidate($id)
      {
 

        $cand = Candidat::find($id);

  
          return view('updatevucandidate', compact('cand'));
      }



    //update vu candidate
    public function updatevucandidateAll(Request $request,$id)
    {
      

$cand = Candidat::find($id);

$cand->update([
  'name' => $request->name,
  'prenom' => $request->prenom,
  'telephone' => $request->telephone,
  'email' => $request->email,
  'cv' => $request->cv,
  'selectionne' => 'oui',
  'offre_id'=>$request->offre_id,
  'user_id'=>$request->user_id,

]);
Sweetalert::success('a été selectionné avec success', $cand->name);
        return view('updatevucandidate', compact('cand'));
    }


    //delete offre emploi
    public function deleteoffreemploi(Request $request)

    {
        $vide = '';
        $prends = OffreEmploi::find($request->check);
      
        //dd($prends);
        if ($prends === null) {
          Sweetalert::success('selectionné', 'Aucun element  ');
            return redirect()->route('voirlesoffresemplois');
        }
        if (count($prends) > 0) {
            foreach ($prends as $enleves) {
                $enleves->delete();
            }
            Sweetalert::success('selectionné', 'Elements supprimé avec succès');
            return redirect()->route('voirlesoffresemplois');
        }
    }

        //delete candidats
        public function deletecandidat(Request $request){

          
            if (Auth::user() === null) {
        
        
                return redirect()->route('welcome');
            }else
          {
            $vide = '';
            $prends = Candidat::find($request->checks);
            foreach($prends as $prend){
              $takes=Candidat:: where('email','=',$prend->email)->first();
             $takes->delete();
            }
          
            //dd($prends);
            if ($prends === null) {
              Sweetalert::success('selectionné', 'Aucun element  ');
                return redirect()->route('voirtouteslescandidatures');
            }
            if (count($prends) > 0) {
                foreach ($prends as $enleves) {
                    $enleves->delete();
                }
                Sweetalert::success('selectionné', 'Elements supprimé avec succès');
                return redirect()->route('voirtouteslescandidatures');
            }
        }
    }

    public function deletecandidatnowant(Request $request){

          
      if (Auth::user() === null) {
  
  
          return redirect()->route('welcome');
      }else
    {
      $vide = '';
      $prends = Candidat::find($request->checks);
      foreach($prends as $prend){
        $takes=Candidat:: where('email','=',$prend->email)->first();
       $takes->delete();
      }
    
      //dd($prends);
      if ($prends === null) {
        Sweetalert::success('selectionné', 'Aucun element  ');
          return redirect()->route('reponsepropositioncontrat');
      }
      if (count($prends) > 0) {
          foreach ($prends as $enleves) {
              $enleves->delete();
          }
          Sweetalert::success('merci...', 'Candidat supprimé');
          return redirect()->route('reponsepropositioncontrat');
      }
  }
}
       

         //delete candidats avec sondage
         public function deletecandidatsondes(Request $request)
         {
             $vide = '';
             $prends = Candidat::find($request->checks);
           
             //dd($prends);
             if ($prends === null) {
               Sweetalert::success('selectionné', 'Aucun element  ');
                 return redirect()->route('toutlessondagescandidats');
             }
             if (count($prends) > 0) {
                 foreach ($prends as $enleves) {
                     $enleves->delete();
                 }
                 Sweetalert::success('selectionné', 'Elements supprimé avec succès');
                 return redirect()->route('toutlessondagescandidats');
             }
         }

      //delete utilisateurs
      public function deleteutilisateurs(Request $request)
      {
          $vide = '';
          $prends = User::find($request->check);
      
          //dd($prends);
          if ($prends === null) {
            Sweetalert::success('selectionné', 'Aucun element  ');
              return redirect()->route('mesutilisateurs');
          }
          if (count($prends) > 0) {
              foreach ($prends as $enleves) {
                  $enleves->delete();
              }
              Sweetalert::success('selectionné', 'Elements supprimé avec succès');
              return redirect()->route('mesutilisateurs');
          }
      }
      public function deleteemploye(Request $request)
      {
          $vide = '';
          $emails = [];
          $prends = User::find($request->checks);
        
          $takes=$prends."[]#items";
         
          $takess = $takes;
        // dd($takess);
        //  $jsonString = $takess;
        //  $transforme = json_decode($jsonString);
        
         // $names = $transforme->name;
          

          //dd($prends);
          if ($prends === null) {
            Sweetalert::success('selectionné', 'Aucun element  ');
              return redirect()->route('voirmesemployes');
          }
        
          if (count($prends) > 0) {
              foreach ($prends as $enleves) {
                  $enleves->delete();
              }
              Sweetalert::success('selectionné', 'Elements supprimé avec succès');
              return redirect()->route('voirmesemployes');
          }
      }


       //creation offre emploi
   public function createcandidatAll(Request $request,$id)
   {
 {
 

 
      $request->validate([
        'name' => ['required'],
        'prenom' => ['required'],
        'sexe'=>['required'],
        'email' => ['required'],
        'telephone' => ['required'],
        'cv' => 'nullable|file|mimes:pdf,doc,docx|max:2048',

    ]);
    $cvPath = null;
    if ($request->hasFile('cv')) {
        $cvPath = $request->file('cv')->store('cv','public'); // Stocke le fichier dans le répertoire public/cv
    }

   Candidat::create(
      [
        'name'=>$request->name,
        'prenom'=>$request->prenom,
        'sexe'=>$request->sexe,
         'email'=>$request->email,
         'telephone'=>$request->telephone,
         'cv'=>$cvPath ,
        'offre_id'=>$request->id,
        'user_id'=>$request->user_id,
        'role'=>$request->titre,
       'selectionne'=>'non',
        'adresse'=>$request->adresse
      ]
      );
   
      Sweetalert::success('enregistrée avec success', 'Informations  ');
      return redirect()->route('offresetformulaire',$id);
 
        
     }
   }


   //send email sondage
       //creation offre emploi
       public function sendemailsondage(Request $request,$id)
       {
     {

        $emails = $request->email;
        $offre = $request->offre;
        $names = $request->name;
        $ids = $request->ids;
     
       $user=Candidat::find($id);

       $user->update([
        'name' => $request->name,
        'prenom' => $request->prenom,
        'telephone' => $request->telephone,
        'email' => $request->email,
        'cv' => $request->cv,
        'selectionne' => 'oui',
        'sondage'=>'envoye',
        'offre_id'=>$request->offre_id,
        'user_id'=>$request->user_id,
      
      ]);
       
       $user->Notify(new SendEmailSondageCandidat($names, $offre, $ids));

          Sweetalert::success(' avec success ', 'Sondage envoyé ');
          return redirect()->route('recrutement');
     
            
         }
       }
  

}
