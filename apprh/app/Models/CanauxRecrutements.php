<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CanauxRecrutements extends Model
{
    use HasFactory;
    protected $fillable = [
        'sitesdemploienligne',
        'reseauxsociaux',
        'siteswebdentreprise',
        'agencesderecrutement',
        'forumsetgroupesspecialises',
        'user_id',
        'journauxetmagazines',
        'ecolesetuniversites',
        'evenementsderecrutement',
        'partenariatsavecassociationspro',
        'candidat_id'
       
      
    ];

   
}

