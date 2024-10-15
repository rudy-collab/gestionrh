<?php

namespace App\MyChangeVuCandidate;

use App\Models\Candidat;
use Illuminate\Support\Facades\Auth;

class ChangeVuCandidate
{
    public static function changestatuscandidat($id)
    {

        $changes = Candidat::find($id);
       
        return $changes;
    }
}