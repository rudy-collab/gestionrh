<?php
namespace App\Services;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class SmsServices
{
    public function take($limit = 10)
    {
        $getCountSmsRead = DB::table('messages_recuses')->where('lu', '=', 'Non lu')->where('idadmin','=',Auth::user()->id)->get();
        return count($getCountSmsRead);
    }
}