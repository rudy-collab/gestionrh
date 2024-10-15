<?php

namespace App\Models;

use App\Models\User;
use App\Models\InfosContratCandidat;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class LesEmploye extends Model
{
    use HasFactory;
    protected $fillable = [
        
        'email',
        'cv',
        'numerocnps',
        'numeroassurancesante',
        'candidat_id',
        'user_id',
        'infos_contrat_id',


    ];
    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
    public function candidat()
    {
        return $this->belongsTo(Candidat::class,'candidat_id');
    }
    public function infoscontratcandidat()
    {
        return $this->belongsTo(InfosContratCandidat::class,'infos_contrat_id');
    }
}
