<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\View\View;
use App\Models\LesEmploye;
use Illuminate\Support\Str;
use App\Models\CoutEmbauche;
use Illuminate\Http\Request;
use App\Models\CoutParEmbauche;
use Illuminate\Validation\Rules;
use Wavey\Sweetalert\Sweetalert;
use App\Models\AvantagesCandidat;
use Illuminate\Support\Facades\DB;
use App\Models\CompteurCoutEmbauche;
use App\Models\InfosContratCandidat;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\CompteurCanalEmbauche;
use Illuminate\Http\RedirectResponse;
use App\Models\LesMissionDesCandidats;
use Illuminate\Auth\Events\Registered;
use App\Models\CompteurMissionCandidat;
use App\Models\CompteurAvantageCandidat;
use Illuminate\Support\Facades\Validator;
use App\Models\AutresComposantesCoutEmbauche;
use App\Notifications\SendNotificationCandidatAcceptContrat;

class CreateRolePermissionUtilisateur extends Controller
{
    public function createpermissionsutilisateur(Request $request)
    {

        $choice = $request->input('choice');
        $emailAdmin = $request->input('emailadmin');
        $admins=User::where('email', '=', Auth::user()->email)->first();
        $adminId=$admins->id;
      

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'prenom' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'telephone' => ['required'],
            'societe'=>['required'],
          
        ]);
        $exists = User::where('idadmin', $adminId)->exists();
        $existes = User::where('permission','=','Responsable Recrutement')->exists();
        $existesgestionperform = User::where('permission','=','Responsable Gestion des Performances')->exists();
        $existesgestionpaie = User::where('permission','=','Responsable Gestion de la Paie')->exists();
        $existesgestionconges = User::where('permission','=','Responsable Gestion des Conges et des Absences')->exists();

        $email = $request->input('email');
        if($exists && $existesgestionperform){
            Sweetalert::warning('Vous ne pouvez creer que 1 seul responsable pour ce module..');
            return redirect()->route('dashboard');
        }
        elseif($exists && $existes){
            Sweetalert::warning('Vous ne pouvez creer que 1 seul responsable pour ce module..');
            return redirect()->route('dashboard');
        }
        elseif($exists && $existesgestionpaie){
            Sweetalert::warning('Vous ne pouvez creer que 1 seul responsable pour ce module..');
            return redirect()->route('dashboard');
        }
        elseif($exists && $existesgestionconges){
            Sweetalert::warning('Vous ne pouvez creer que 1 seul responsable pour ce module..');
            return redirect()->route('dashboard');
        }
        else{
            $matricules = Str::random(10);
            $password = Str::random(8);
            $user = User::create([
                'name' => $request->name,
                'prenom'=>$request->prenom,
                'sexe'=>$request->sexe,
                'email' => $request->email,
                'admin'=>'Pas Admin',
                'societe'=>$request->societe,
                'telephone'=>$request->telephone,
                'permission'=>$request->choice,
                'role'=>$request->choice,
                'adresse'=>$request->adress,
                'matricule'=>$matricules,
                'nouveau'=>'oui',
                'idadmin'=>$adminId,
                'password' => Hash::make($password),
                
            ]);

            $users = User::where('id','=',Auth::user()->id);
            $users->update([
              'creationpermission'=>'oui'
            ]);

            CompteurMissionCandidat::create([
                'status'=>10,
                'permission'=>$request->choice,
                'email'=>$request->email,
                'user_id'=>Auth::user()->id,
        
            
              ]);
              CompteurAvantageCandidat::create([
                'status'=>10 ,
                'permission'=>$request->choice,
                'email'=>$request->email,
                'user_id'=>Auth::user()->id,
         
              ]);


              CompteurCoutEmbauche::create([
                'status'=>10 ,
                'email'=>$request->email,
                'user_id'=>Auth::user()->id,
         
              ]);
              CompteurCanalEmbauche::create([
                'status'=>10 ,
                'email'=>$request->email,
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
                'email'=>$request->email,
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
                'email'=>$request->email,
                'user_id'=>Auth::user()->id
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
                'permission'=>$request->choice,
                'email'=>$request->email,
                'user_id'=>Auth::user()->id
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
                'permission'=>$request->choice,
                'email'=>$request->email,
                'user_id'=>Auth::user()->id
              ]);

      
        }
     

        $userRecup = User::where('email', $email)->first();


        // Créer des rôles et leur assigner des permissions
        $names=$request->name;
        $emails=$request->email;
        $motdepasse=$password;
        $userRecup->Notify(new SendNotificationCandidatAcceptContrat($names,$emails,$motdepasse));

       Sweetalert::info('avec succès', 'Nouvel Employé crée');
        return redirect()->route('dashboard');
    }


    // creation employe
    public function creationemploye(Request $request)
    {
      if (Auth::user() === null) {


          return view('welcome');
      } else {
        $emailAdmin = $request->input('emailadmin');
        $admins=User::where('email', '=', Auth::user()->email)->first();
        $adminId=$admins->id;  
        $email = $request->input('email');
        
        $request->validate([
          'name' => ['required', 'string', 'max:255'],
          'prenom' => ['required', 'string', 'max:255'],
          'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
          'telephone' => ['required'],
          'societe'=>['required'],
        
      ]);


      $matricules = Str::random(10);
      $password = Str::random(8);
      $user = User::create([
          'name' => $request->name,
          'prenom'=>$request->prenom,
          'sexe'=>$request->sexe,
          'email' => $request->email,
          'admin'=>'Pas Admin',
          'nouveau'=>'oui',
          'societe'=>$request->societe,
          'telephone'=>$request->telephone,
          'role'=>$request->role,
          'adresse'=>$request->adress,
          'matricule'=>$matricules,
          'idadmin'=>$adminId,
          'password' => Hash::make($password),
      ]);

      $users = User::where('id','=',Auth::user()->id);
  

      CompteurMissionCandidat::create([
          'status'=>10,
          'email'=>$request->email,
          'user_id'=>Auth::user()->id,
  
      
        ]);
        CompteurAvantageCandidat::create([
          'status'=>10 ,
          'email'=>$request->email,
          'user_id'=>Auth::user()->id,
   
        ]);

        CompteurCoutEmbauche::create([
          'status'=>10 ,
          'email'=>$request->email,
          'user_id'=>Auth::user()->id,
   
        ]);
        CompteurCanalEmbauche::create([
          'status'=>10 ,
          'email'=>$request->email,
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
          'email'=>$request->email,
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
          'email'=>$request->email,
          'user_id'=>Auth::user()->id
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
          'email'=>$request->email,
          'user_id'=>Auth::user()->id
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
         'email'=>$request->email,
          'user_id'=>Auth::user()->id
        ]);
        $userRecup = User::where('email', $email)->first();
        $names=$request->name;
        $emails=$request->email;
        $motdepasse=$password;
        $userRecup->Notify(new SendNotificationCandidatAcceptContrat($names,$emails,$motdepasse));

       Sweetalert::info('avec succès', 'Nouvel Employé crée');
        return redirect()->route('dashboard');
      }
    }



     //mes utilisateurs
  public function mesutilisateurs()
  {
    $firstEntry = DB::table('users')->where('idadmin', '=', Auth::user()->id)->oldest('id')->first();
    if (Auth::user() === null) {


        return view('welcome');
    } else {
     $utilisateur= User::where('idadmin', '=', Auth::user()->id)->where('employe','=','oui')->where('permission','!=','aucune')->get();
     $utilisateurs= User::where('idadmin', '=', Auth::user()->id)->where('permission','=','Responsable Recrutement')->first();

        return view('mesutilisateurs',compact('utilisateur','firstEntry','utilisateurs'));
    }
  }






         // creation nouvel employe et lui assigner une permission

         public function modifierinfosnouvelemployepermission($id)
         {
           if (Auth::user() === null) {
   
   
               return view('welcome');
           } else {


$employe = User::find($id);


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
           


  

  
  
        //$candidats = Candidat::where('user_id','=',Auth::user()->id)->orderBy('id', 'desc')->paginate(4);

        $recup = CompteurMissionCandidat::where('user_id','=',Auth::user()->id)->where('email','=',$employe->email)->first();
      

        $recups = CompteurAvantageCandidat::where('user_id','=',Auth::user()->id)->where('email','=',$employe->email)->first();


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
         
         $status  = LesMissionDesCandidats::where('user_id','=',Auth::user()->id)->where('email','=',$employe->email)->first();
         $statuss  = AvantagesCandidat::where('user_id','=',Auth::user()->id)->where('email','=',$employe->email)->first();
      
         
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
         
           return view('modifierinfosnouvelemployepermission',
           
           
           [
            $id,
            'employe'=>$employe,
           'recup'=>$recup,
           'recups'=>$recups,
           'montant'=>$montant,
           'mission1'=>$mission1,
           'mission2'=>$mission2,
           'mission3'=>$mission3,
           'mission4'=>$mission4,
           'mission5'=>$mission5,
           'mission6'=>$mission6,
           'mission7'=>$mission7,
           'mission8'=>$mission8,
           'mission9'=>$mission9,
           'mission10'=>$mission10,
           'lavantage'=>$lavantage,
           'avantage1'=>$avantage1,
           'avantage2'=>$avantage2,
           'avantage3'=>$avantage3,
           'avantage4'=>$avantage4,
           'avantage5'=>$avantage5,
           'avantage6'=>$avantage6,
           'avantage7'=>$avantage7,
           'avantage8'=>$avantage8,
           'avantage9'=>$avantage9,
           'avantage10'=>$avantage10]);
      
   
           }
         }


                  // creation nouvel employe et lui assigner une permission

                  public function modifierinfosnouvelemployepermissionAll(Request $request, $id)
                  {
                    if (Auth::user() === null) {
            
            
                        return view('welcome');
                    } else {

                      $request->validate([
      
                        'cv' => 'nullable|file|mimes:pdf,doc,docx|max:2048',
                
                    ]);
                      $employe = User::find($request->ids);
                  
                      $recup = CompteurMissionCandidat::where('user_id','=',Auth::user()->id)->where('email','=',$employe->email)->first();



                      $avantages = AvantagesCandidat::where('user_id','=',Auth::user()->id)->where('email','=',$employe->email)->first();
                     
                      $missions = LesMissionDesCandidats::where('user_id','=',Auth::user()->id)->where('email','=',$employe->email)->first();
                    
                     
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
                'user_id'=>Auth::user()->id,
                'avantage_candidat_id'=>$avantages->id,
                'missions_candidat_id'=>$missions->id,
                
                
                
                ]);
                
                $users=User::where('id','=',$request->id)->first();
                
                $infosid= InfosContratCandidat::where('user_id','=',Auth::user()->id)->where('avantage_candidat_id','=',$avantages->id)->first();
                LesEmploye::create([
                                
                    'cv'=> $cvPath ,
                    'numerocnps'=>'aucun',
                    'numeroassurancesante'=>'aucun',
                    'user_id'=>Auth::user()->id,
                    'infos_contrat_id'=>$infosid->id
                ]);
                
                $employeid=LesEmploye::where('user_id','=',Auth::user()->id,)->where('infos_contrat_id','=',$infosid->id)->first();
                $users->update([
                    'contratactive'=>'oui',
                    'employe_id'=>$employeid->id
                   
                ]);
             
                Sweetalert::success('avec success ', 'Informations complétée(s)');
                      return redirect()->route('modifierinfosnouvelemployepermission',
                    [
                      $id,
                      'recup'=>$recup


                    ]
                    );
            
           
                    }
                  }


         public function nouvelemployeetpermission()
         {
           if (Auth::user() === null) {
   
   
               return view('welcome');
           } else {
           
   
               return view('nouvelemployeetpermission');
           }
         }



         //ajouler les missions et avantages 


         public function addmissionnouvelemployepermission(Request $request, $id)
         {
           if (Auth::user() === null) {
       
       
               return redirect()->route('welcome');
           } else {
              
             $employe=User::find($request->ids);
         
   
     $upds = CompteurMissionCandidat::where('user_id','=',Auth::user()->id)->where('email','=',$employe->email)->first();

     if($upds->status > 0){
     $upds->status-= 1;
     $upds->save();
     
     }elseif($upds->status === 0){
     
     }
          
          $status  = LesMissionDesCandidats::where('user_id','=',Auth::user()->id)->where('email','=',$employe->email)->first();
         
     
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
          
               return redirect()->route('modifierinfosnouvelemployepermission',
               [ $id,
               'upds'=>$upds
               
               
               ]
              );
           }
         }
     
     
     
     
     public function addavantagenouvelemployepermission(Request $request, $id)
     {
       if (Auth::user() === null) {
     
     
           return redirect()->route('welcome');
       } else {
          
          
        $employe=User::find($request->ids);
     $updss = CompteurAvantageCandidat::where('user_id','=',Auth::user()->id)->where('email','=',$employe->email)->first();
     
     if($updss->status > 0){
     $updss->status-= 1;
     $updss->save();
     
     }elseif($updss->status === 0){
     
     }
     $avantages  = AvantagesCandidat::where('user_id','=',Auth::user()->id)->where('email','=',$employe->email)->first();
     
     
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
     
           return redirect()->route('modifierinfosnouvelemployepermission',
           [
            $id,
            'updss'=>$updss
           ]
          );
       }
     }
}
