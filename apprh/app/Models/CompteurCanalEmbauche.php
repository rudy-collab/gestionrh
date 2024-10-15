<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompteurCanalEmbauche extends Model
{
    use HasFactory;

    protected $fillable = [
        'status',
        'candidat_id',
        'user_id',
        'email'

    ];
}
