<?php

use App\Services\SmsServices;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\GeneratePdf;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SmsController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AnnonceController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FormulaireCandidature;
use App\Http\Controllers\GestionPaieController;
use App\Http\Controllers\PerformanceController;
use App\Http\Controllers\RecrutementController;
use App\Http\Controllers\admnistrationController;
use App\Http\Controllers\EspaceEmployeController;
use App\Http\Controllers\SendTemplateOffreEmploi;
use App\Http\Controllers\CoutParEmployeController;
use App\Http\Controllers\AddMissionAdminController;
use App\Http\Controllers\VoirMesEmployesController;
use App\Http\Controllers\GraphiqueCanauxRecrutement;
use App\Http\Controllers\FormulaireSondageController;
use App\Http\Controllers\GestionCongesAbsenceController;
use App\Http\Controllers\CreateRolePermissionUtilisateur;
use App\Http\Controllers\CompleteInfosProfilUserController;
use App\Http\Controllers\DiscussAdminRespoRecrutController;
use App\Http\Controllers\PropositionContratCandidatController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/gestionadministrative', [admnistrationController::class, 'gestionadministrative'])->middleware(['auth','verified'])->name('gestionadministrative');
Route::get('/gestionpaie', [GestionPaieController::class, 'gestionpaie'])->middleware(['auth','verified'])->name('gestionpaie');
Route::get('/performance', [PerformanceController::class, 'performance'])->middleware(['auth','verified'])->name('performance');
Route::get('/gestionabsence', [GestionCongesAbsenceController::class, 'gestionabsence'])->middleware(['auth','verified'])->name('gestionabsence');


//formulaire candidature
Route::get('/formulairecandidature/{id}', [FormulaireCandidature::class, 'formulairecandidature'])->middleware(['auth','verified'])->name('formulairecandidature');


//Route createpermissionutilisateur
Route::post('/createpermissionsutilisateur', [CreateRolePermissionUtilisateur::class, 'createpermissionsutilisateur'])->name('createpermissionsutilisateur');
Route::post('/creationemploye', [CreateRolePermissionUtilisateur::class, 'creationemploye'])->name('creationemploye');
Route::get('/nouvelemployeetpermission', [CreateRolePermissionUtilisateur::class, 'nouvelemployeetpermission'])->name('nouvelemployeetpermission');
Route::get('/mesutilisateurs', [CreateRolePermissionUtilisateur::class, 'mesutilisateurs'])->name('mesutilisateurs');
Route::get('/modifierinfosnouvelemployepermission/{id}', [CreateRolePermissionUtilisateur::class, 'modifierinfosnouvelemployepermission'])->name('modifierinfosnouvelemployepermission');
Route::post('/modifierinfosnouvelemployepermission/{id}', [CreateRolePermissionUtilisateur::class, 'modifierinfosnouvelemployepermissionAll'])->name('modifierinfosnouvelemployepermission');
Route::post('/addmissionnouvelemployepermission/{id}', [CreateRolePermissionUtilisateur::class, 'addmissionnouvelemployepermission'])->middleware(['auth','verified'])->name('addmissionnouvelemployepermission');
Route::post('/addavantagenouvelemployepermission/{id}', [CreateRolePermissionUtilisateur::class, 'addavantagenouvelemployepermission'])->middleware(['auth','verified'])->name('addavantagenouvelemployepermission');
Route::post('/completeinfosprofilnouvelemployepermission/{id}', [CreateRolePermissionUtilisateur::class, 'completeinfosprofilnouvelemployepermission'])->middleware(['auth','verified'])->name('completeinfosprofilnouvelemployepermission');




//Route generate pdf or send template
Route::get('/generatepdf/{id}', [GeneratePdf::class, 'generatepdf'])->middleware(['auth','verified'])->name('generatepdf');
Route::get('/generatepdftrue/{id}', [GeneratePdf::class, 'generatepdftrue'])->middleware(['auth','verified'])->name('generatepdftrue');

//sms
Route::get('/chat', [SmsController::class, 'chat'])->middleware(['auth','verified'])->name('chat');
Route::post('/chat', [SmsController::class, 'sendMessage'])->middleware(['auth','verified'])->name('chat');
Route::post('/envoimessagesauxutilisateurs/{id?}', [SmsController::class, 'envoimessagesauxutilisateurs'])->middleware(['auth','verified'])->name('envoimessagesauxutilisateurs');
Route::post('/envoimessageaAdmin', [SmsController::class, 'envoimessageaAdmin'])->middleware(['auth','verified'])->name('envoimessageaAdmin');
Route::post('/deletesmsbyadmin', [SmsController::class, 'deletesmsbyadmin'])->middleware(['auth','verified'])->name('deletesmsbyadmin');
Route::post('/deletesmsbyadmindeux', [SmsController::class, 'deletesmsbyadmindeux'])->middleware(['auth','verified'])->name('deletesmsbyadmindeux');
Route::post('/updatesmsreceivebyadmin', [SmsController::class, 'updatesmsreceivebyadmin'])->middleware(['auth','verified'])->name('updatesmsreceivebyadmin');
Route::post('/updatesmssendbyadmin', [SmsController::class, 'updatesmssendbyadmin'])->middleware(['auth','verified'])->name('updatesmssendbyadmin');


//Routes RecrutementController//
Route::post('/deletecandidatnowant', [RecrutementController::class, 'deletecandidatnowant'])->middleware(['auth','verified'])->name('deletecandidatnowant');
Route::get('/createcandidat', [RecrutementController::class, 'createcandidat'])->name('createcandidat');
Route::post('/createcandidat/{id}', [RecrutementController::class, 'createcandidatAll'])->name('createcandidat');
Route::get('/voirtouteslescandidatures', [RecrutementController::class, 'voirtouteslescandidatures'])->middleware(['auth','verified'])->name('voirtouteslescandidatures');
Route::post('/updateoffreemploi/{id}', [RecrutementController::class, 'updateoffreemploi'])->middleware(['auth','verified'])->name('updateoffreemploi');
Route::get('/voirlesoffresemplois', [RecrutementController::class, 'voirlesoffresemplois'])->middleware(['auth','verified'])->name('voirlesoffresemplois');
Route::post('/deleteutilisateurs', [RecrutementController::class, 'deleteutilisateurs'])->middleware(['auth','verified'])->name('deleteutilisateurs');
Route::post('/deleteemploye', [RecrutementController::class, 'deleteemploye'])->middleware(['auth','verified'])->name('deleteemploye');
Route::post('/deletecandidat', [RecrutementController::class, 'deletecandidat'])->middleware(['auth','verified'])->name('deletecandidat');
Route::post('/deletecandidatsondes', [RecrutementController::class, 'deletecandidatsondes'])->middleware(['auth','verified'])->name('deletecandidatsondes');
Route::post('/deleteoffreemploi', [RecrutementController::class, 'deleteoffreemploi'])->middleware(['auth','verified'])->name('deleteoffreemploi');
Route::post('/sendemailsondage/{id}', [RecrutementController::class, 'sendemailsondage'])->middleware(['auth','verified'])->name('sendemailsondage');
//
Route::get('/discussionadminresporecrutement', [DiscussAdminRespoRecrutController::class, 'discussionadminresporecrutement'])->middleware(['auth','verified'])->name('discussionadminresporecrutement');
Route::get('/receptsmsadminbyresporecrutement', [DiscussAdminRespoRecrutController::class, 'receptsmsadminbyresporecrutement'])->middleware(['auth','verified'])->name('receptsmsadminbyresporecrutement');



//SendTemplateOffreEmploi
Route::get('/offresetformulaire/{id}', [SendTemplateOffreEmploi::class, 'offresetformulaire'])->name('offresetformulaire');
Route::get('/sendtemplateoffre/{id}', [SendTemplateOffreEmploi::class, 'sendtemplateoffre'])->middleware(['auth','verified'])->name('sendtemplateoffre');
Route::post('/sendtemplateoffres/{id}', [SendTemplateOffreEmploi::class, 'sendtemplateoffreAll'])->middleware(['auth','verified'])->name('sendtemplateoffres');
//formulairesondage
Route::get('/formulairesondage/{id}', [FormulaireSondageController::class, 'formulairesondage'])->name('formulairesondage');
Route::post('/formulairesondage/{id}', [FormulaireSondageController::class, 'formulairesondageAll'])->name('formulairesondage');
Route::get('/toutlessondagescandidats', [FormulaireSondageController::class, 'toutlessondagescandidats'])->middleware(['auth','verified'])->name('toutlessondagescandidats');
Route::get('/reponsesondageparcandidat/{id}', [FormulaireSondageController::class, 'reponsesondageparcandidat'])->middleware(['auth','verified'])->name('reponsesondageparcandidat');
Route::get('/propositioncontratcandidat/{id}', [FormulaireSondageController::class, 'propositioncontratcandidat'])->middleware(['auth','verified'])->name('propositioncontratcandidat');
Route::post('/updatesondagecandidat/{id}', [FormulaireSondageController::class, 'updatesondagecandidat'])->middleware(['auth','verified'])->name('updatesondagecandidat');

//espace employe
Route::get('/espaceemploye', [EspaceEmployeController::class, 'espaceemploye'])->middleware(['auth','verified'])->name('espaceemploye');

//annonce
Route::get('/annonces', [AnnonceController::class, 'annonces'])->middleware(['auth','verified'])->name('annonces');

// voir mes employes
Route::get('/voirmesemployes', [VoirMesEmployesController::class, 'voirmesemployes'])->middleware(['auth','verified'])->name('voirmesemployes');
Route::post('/voirmesemployes', [VoirMesEmployesController::class, 'voirmesemployesAll'])->middleware(['auth','verified'])->name('voirmesemployes');
Route::get('/choixemployepourpermission', [VoirMesEmployesController::class, 'choixemployepourpermission'])->middleware(['auth','verified'])->name('choixemployepourpermission');
Route::post('/choixemployepourpermission', [VoirMesEmployesController::class, 'choixemployepourpermissionupdate'])->middleware(['auth','verified'])->name('choixemployepourpermission');
Route::get('/modifpermissionemploye/{id}', [VoirMesEmployesController::class, 'modifpermissionemploye'])->middleware(['auth','verified'])->name('modifpermissionemploye');
Route::post('/modifpermissionemploye/{id}', [VoirMesEmployesController::class, 'modifpermissionemployeAll'])->middleware(['auth','verified'])->name('modifpermissionemploye');
Route::get('/employedetails/{id}', [VoirMesEmployesController::class, 'employedetails'])->middleware(['auth','verified'])->name('employedetails');
Route::get('/employedetailscandidat/{id}', [VoirMesEmployesController::class, 'employedetailscandidat'])->middleware(['auth','verified'])->name('employedetailscandidat');

Route::get('/employepermissiondetails/{id}', [VoirMesEmployesController::class, 'employepermissiondetails'])->middleware(['auth','verified'])->name('employepermissiondetails');
Route::get('/voircontratcandidat/{id}', [VoirMesEmployesController::class, 'voircontratcandidat'])->middleware(['auth','verified'])->name('voircontratcandidat');
Route::get('/voircontratemploye/{id}', [VoirMesEmployesController::class, 'voircontratemploye'])->middleware(['auth','verified'])->name('voircontratemploye');
Route::get('/voircontratemployepermission/{id}', [VoirMesEmployesController::class, 'voircontratemployepermission'])->middleware(['auth','verified'])->name('voircontratemployepermission');
Route::get('/telechargercontratemploye/{id}', [VoirMesEmployesController::class, 'telechargercontratemploye'])->middleware(['auth','verified'])->name('telechargercontratemploye');
Route::get('/telechargercontratemployes/{id}', [VoirMesEmployesController::class, 'telechargercontratemployes'])->middleware(['auth','verified'])->name('telechargercontratemployes');
Route::get('/telechargercontratemployespermission/{id}', [VoirMesEmployesController::class, 'telechargercontratemployespermission'])->middleware(['auth','verified'])->name('telechargercontratemployespermission');


//frais recrutement cout par employe
Route::get('/configurercoutembaucheparemploye/{id}', [CoutParEmployeController::class, 'configurercoutembaucheparemploye'])->middleware(['auth','verified'])->name('configurercoutembaucheparemploye');
Route::post('/addcoutembaucheemployes/{id}', [CoutParEmployeController::class, 'addcoutembaucheemployes'])->middleware(['auth','verified'])->name('addcoutembaucheemployes');
Route::post('/addcoutembaucheemploye/{id}', [CoutParEmployeController::class, 'addcoutembaucheemploye'])->middleware(['auth','verified'])->name('addcoutembaucheemploye');
Route::get('/coutparemploye', [CoutParEmployeController::class, 'coutparemploye'])->middleware(['auth','verified'])->name('coutparemploye');
Route::get('/coutparemployecalcul', [CoutParEmployeController::class, 'coutparemployecalcul'])->middleware(['auth','verified'])->name('coutparemployecalcul');
Route::post('/coutparemployecalcul', [CoutParEmployeController::class, 'coutparemployecalculAll'])->middleware(['auth','verified'])->name('coutparemployecalcul');


//essai proposition candidature
Route::post('/countmissioncandidat/{id}', [PropositionContratCandidatController::class, 'countmissioncandidat'])->middleware(['auth','verified'])->name('countmissioncandidat');
Route::post('/countavantagescandidat/{id}', [PropositionContratCandidatController::class, 'countavantagescandidat'])->middleware(['auth','verified'])->name('countavantagescandidat');
Route::post('/sendcontratcandidat/{id}', [PropositionContratCandidatController::class, 'sendcontratcandidat'])->middleware(['auth','verified'])->name('sendcontratcandidat');
Route::post('/reponsepropositioncontrat/{id}', [PropositionContratCandidatController::class, 'reponsepropositioncontratAll'])->name('reponsepropositioncontrat');
Route::get('/reponsepropositioncontrat/{id}', [PropositionContratCandidatController::class, 'reponsepropositioncontrat'])->name('reponsepropositioncontrat');
Route::get('/confirmreponsepropositioncontrat/{id}', [PropositionContratCandidatController::class, 'confirmreponsepropositioncontrat'])->middleware(['auth','verified'])->name('confirmreponsepropositioncontrat');


// add missions admin
Route::post('/addmissionadmin/{id}', [AddMissionAdminController::class, 'addmissionadmin'])->middleware(['auth','verified'])->name('addmissionadmin');
Route::post('/addavantageadmin/{id}', [AddMissionAdminController::class, 'addavantageadmin'])->middleware(['auth','verified'])->name('addavantageadmin');
Route::post('/completeinfosadmin/{id}', [AddMissionAdminController::class, 'completeinfosadmin'])->middleware(['auth','verified'])->name('completeinfosadmin');

//


// graphique canaux recutement
Route::get('/graphiquecanauxrecrutement', [GraphiqueCanauxRecrutement::class, 'graphiquecanauxrecrutement'])->middleware(['auth','verified'])->name('graphiquecanauxrecrutement');

//updatevucandidate
Route::post('/updatevucandidate/{id}', [RecrutementController::class, 'updatevucandidateAll'])->middleware(['auth','verified'])->name('updatevucandidate');
Route::get('/updatevucandidate/{id}', [RecrutementController::class, 'updatevucandidate'])->middleware(['auth','verified'])->name('updatevucandidate');

//recrutement
Route::get('/recrutement', [RecrutementController::class, 'recrutement'])->middleware(['auth','verified'])->name('recrutement');
Route::post('/recrutement', [RecrutementController::class, 'recrutementAll'])->middleware(['auth','verified'])->name('recrutement');
Route::get('/dashboard', [PostController::class, 'dashboard'])->middleware(['auth','verified'])->name('dashboard');

//complete infos profil user
Route::get('/completeinfosprofiluser/{id}', [CompleteInfosProfilUserController::class, 'completeinfosprofiluser'])->middleware(['auth','verified'])->name('completeinfosprofiluser');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
