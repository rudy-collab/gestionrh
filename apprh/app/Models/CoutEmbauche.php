<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CoutEmbauche extends Model
{
    use HasFactory;
    protected $fillable = [
  'montant1',
    'montant2',
    'montant3',
   'montant4',
   'montant5',
   'montant6',
    'montant7',
   'montant8',
   'montant9',
   'montant10',
   'sitesdemploienligne',
   'reseauxsociaux',
    'siteswebdentreprise',
  'agencesderecrutement',
   'forumsetgroupesspecialises',
   'journauxetmagazines',
   'ecolesetuniversites',
   'evenementsderecrutement',
   'bulletinsinternes',
  'recrutementdirecte',
   'fraisderecrutement',
   'fraisdeformation',
    'tempsderecrutement',
   'fraisadministratifs',
  'autresfrais',
  'email',
  'user_id'
    ];
}
