<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LesMissionDesCandidats extends Model
{
    use HasFactory;
    protected $fillable = [
        'mission1',
        'mission2',
        'mission3',
        'mission4',
        'mission5',
        'mission6',
        'mission7',
        'mission8',
        'mission9',
        'mission10', 
        'candidat_id',
        'user_id',
        'permission',
        'email'

    ];
    public function candidat()
    {
        return $this->belongsTo(Candidat::class);
    }
}
