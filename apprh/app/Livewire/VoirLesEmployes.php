<?php

namespace App\Livewire;


use App\Models\User;
use Livewire\Component;
use App\Models\LesEmploye;
use Livewire\WithPagination;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class VoirLesEmployes extends Component
{

   
    protected $paginationTheme = 'bootstrap';
    public $search='';
    public $searchs='';



    public function render()
    {
        $employes = LesEmploye::where('user_id','=',Auth::user()->id)->orderBy('id', 'desc')->with('user')->paginate(4);
        $user = User::where('id','=',Auth::user()->id)->first();
        $usersemploye = $user->societe;

        $users=User::where('societe','=', $usersemploye)->where('name', 'like', '%' . $this->searchs . '%')->orderBy('id','desc')->paginate(1);
        $firstEntry = DB::table('users')->where('societe', '=', Auth::user()->societe)->oldest('id')->first();

        return view('livewire.voir-les-employes',['employes'=>$employes,'firstEntry'=>$firstEntry,'users'=>$users]);
    }
}
