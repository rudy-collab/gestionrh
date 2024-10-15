<?php

namespace App\Models;

use App\Models\OffreEmploi;
use App\Models\Candidat;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class OffreEmploi extends Model
{
    use HasFactory;

    protected $fillable = [
        'titre',
        'description',
        'user_id',
        'reference',
        'url'
    ];

    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
   

    public function candidat()
    {
        return $this->belongsTo(Candidat::class);
    }
}
