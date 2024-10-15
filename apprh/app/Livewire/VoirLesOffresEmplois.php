<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\OffreEmploi;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\WithPagination;



class VoirLesOffresEmplois extends Component
{

    public $query='';
    use WithPagination;

  
    public function updatedPerPage()
    {
        $this->resetPage();
    }
    
    public function render()
    {

        if(Auth::user() === null){
            return view('welcome');

        }else{

            $offres= OffreEmploi::where('user_id','=',Auth::user()->id )->where('titre','LIKE',"%{$this->query}%")->orderBy('id','desc')->paginate(3);
           
            return view('livewire.voir-les-offres-emplois',['offres'=>$offres]);
        }
       
    }
}
