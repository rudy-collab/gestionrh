<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\LesEmploye;
use App\Models\OffreEmploi;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory, Notifiable, HasApiTokens;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'prenom',
        'email',
        'telephone',
        'admin',
        'role',
        'societe',
        'password',
        'idadmin',
        'permission',
        'creationpermission',
        'employe',
        'employe_id',
        'role',
        'matricule',
        'adresse',
        'contratactive',
        'candidat',
        'sexe',
        'nouveau',
        'owner'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function offresemploi(){
        return $this->hasMany(OffreEmploi::class,'offre_id');
    }

    public function coutembauche(){
        return $this->belongsTo(CoutParEmbauche::class,'cout_embauche_id');
    }

    public function voiremploye(){
        return $this->belongsTo(LesEmploye::class,'employe_id');
    }
    public function message(){
        return $this->belongsTo(Message::class);
    }

    public function messagerecus(){
        return $this->belongsTo(MessagesRecus::class);
    }
    
  
}
