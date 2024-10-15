<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AutresComposantesCoutEmbauche extends Model
{
    use HasFactory;

    protected $fillable = [
        'composanteun',
        'composantedeux',
        'composantetrois',
        'composantequatre',
        'composantecinq',
        'composantesix',
        'composantesept',
        'composantehuit',
        'composanteneuf',
        'composantedix',
        'valeurun',
        'valeurdeux',
        'valeurtrois',
        'valeurquatre',
        'valeurcinq',
        'valeursix',
        'valeursept',
        'valeurhuit',
        'valeurneuf',
        'valeurdix',
        'email',
        'user_id',


    ];
}
