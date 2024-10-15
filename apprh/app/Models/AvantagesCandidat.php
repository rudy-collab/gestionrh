<?php

namespace App\Models;

use App\Models\Candidat;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AvantagesCandidat extends Model
{
    use HasFactory;

    protected $fillable = [
        'avantage1',
        'avantage2',
        'avantage3',
        'avantage4',
        'avantage5',
        'avantage6',
        'avantage7',
        'avantage8',
        'avantage9',
        'avantage10',
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
