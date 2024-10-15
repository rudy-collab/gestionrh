<?php

namespace App\Models;

use App\Models\LesEmploye;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class InfosContratCandidat extends Model
{
    use HasFactory;

    protected $fillable = [
        'cv',
        'servicerattachment',
        'responsableservice',
        'lieutravail',
        'datedebutcontrat',
        'nbremoisperiodeessai',
        'remunerationbrute',
        'nbremoisremunerationbrute',
        'typecontrat',
        'dureecontrat',
        'horairetravail',
        'jourdebut',
        'jourfin',
        'heuredebut',
        'heurefin',
        'nbrejoursconge',
        'datelimitereponse',
        'avantage_candidat_id',
        'missions_candidat_id',
        'candidat_id',
        'user_id',

    ];
   
}
