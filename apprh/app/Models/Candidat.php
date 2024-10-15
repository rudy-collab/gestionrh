<?php

namespace App\Models;

use App\Models\Candidat;
use App\Models\OffreEmploi;
use App\Models\ReponsesSondage;
use App\Models\AvantagesCandidat;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Candidat extends Model
{
    use HasFactory,Notifiable;
    
    protected $fillable = [
        'name',
        'email',
        'telephone',
        'prenom',
        'cv',
        'user_id',
        'offre_id',
        'selectionne',
        'sondage',
        'reponse_id',
        'reponsesondage',
        'sexe',
        'adresse',
        'selects',
        'employe'
       
       
      
    ];

    public function missioncandidat(){
        return $this->hasMany(MissionCandidat::class);
    }

   
    public function offreemploi()
    {
        return $this->belongsTo(OffreEmploi::class,'offre_id');
    }
    public function voiremploi()
    {
        return $this->belongsTo(LesEmploye::class);
    }

   
    public function avantagescandidat(){
        return $this->hasMany(AvantagesCandidat::class);
    }
}
