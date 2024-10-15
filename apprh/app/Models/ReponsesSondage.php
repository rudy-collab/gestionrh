<?php

namespace App\Models;

use App\Models\Candidat;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ReponsesSondage extends Model
{
    use HasFactory;

    protected $fillable = [
        'reponse1',
        'reponse2',
        'reponse3',
        'reponse4',
        'reponse5',
        'reponse6',
        'reponse7',
        'reponse8',
        'reponse9',
        'reponse10',
        'reponse11',
        'reponse12',
        'reponse13',
        'reponse14',
        'reponse15',
        'candidat_id',
        'user_id'
    
       
      
    ];


    public function candidat()
    {
        return $this->belongsTo(Candidat::class);
    }
}
