<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class GraphiqueCanauxRecrutement extends Controller
{
    public function graphiquecanauxrecrutement()
    {

        if (Auth::user() === null) {
 
 
            return redirect()->route('welcome');
        } elseif((Auth::user()->owner === 'oui') ){
            $data = DB::table('canaux_recrutements')->where('user_id','=',Auth::user()->id)->get(); 
            $cumul = [
                'sitesdemploienligne' => 0,
                'reseauxsociaux' => 0,
                'siteswebdentreprise' => 0,
                'agencesderecrutement' => 0,
                'forumsetgroupesspecialises' => 0,
                'journauxetmagazines' => 0,
                'ecolesetuniversites' => 0,
                'evenementsderecrutement' => 0,
                'partenariatsavecassociationspro' => 0,
            ];
            // Calculer le total
            foreach ($data as $row) {
                $cumul['sitesdemploienligne'] += $row->sitesdemploienligne;
                $cumul['reseauxsociaux'] += $row->reseauxsociaux;
                $cumul['siteswebdentreprise'] += $row->siteswebdentreprise;
                $cumul['agencesderecrutement'] += $row->agencesderecrutement;
                $cumul['forumsetgroupesspecialises'] += $row->forumsetgroupesspecialises;
                $cumul['journauxetmagazines'] += $row->journauxetmagazines;
                $cumul['ecolesetuniversites'] += $row->ecolesetuniversites;
                $cumul['evenementsderecrutement'] += $row->evenementsderecrutement;
                $cumul['partenariatsavecassociationspro'] += $row->partenariatsavecassociationspro;
            }
        
            // Calculer le total des cumuls
            $total = array_sum($cumul);
        
            // Calculer les pourcentages
            $percentages = array_map(function ($value) use ($total) {
                return $total > 0 ? ($value / $total) * 100 : 0;
            }, $cumul);
    
            return view('graphiquecanauxrecrutement',compact('percentages'));
        }elseif((Auth::user()->admin === 'Pas Admin') && (Auth::user()->permission ==='Responsable Recrutement')){
            $data = DB::table('canaux_recrutements')->where('user_id','=',Auth::user()->idadmin)->get(); 
            $cumul = [
                'sitesdemploienligne' => 0,
                'reseauxsociaux' => 0,
                'siteswebdentreprise' => 0,
                'agencesderecrutement' => 0,
                'forumsetgroupesspecialises' => 0,
                'journauxetmagazines' => 0,
                'ecolesetuniversites' => 0,
                'evenementsderecrutement' => 0,
                'partenariatsavecassociationspro' => 0,
            ];
            // Calculer le total
            foreach ($data as $row) {
                $cumul['sitesdemploienligne'] += $row->sitesdemploienligne;
                $cumul['reseauxsociaux'] += $row->reseauxsociaux;
                $cumul['siteswebdentreprise'] += $row->siteswebdentreprise;
                $cumul['agencesderecrutement'] += $row->agencesderecrutement;
                $cumul['forumsetgroupesspecialises'] += $row->forumsetgroupesspecialises;
                $cumul['journauxetmagazines'] += $row->journauxetmagazines;
                $cumul['ecolesetuniversites'] += $row->ecolesetuniversites;
                $cumul['evenementsderecrutement'] += $row->evenementsderecrutement;
                $cumul['partenariatsavecassociationspro'] += $row->partenariatsavecassociationspro;
            }
        
            // Calculer le total des cumuls
            $total = array_sum($cumul);
        
            // Calculer les pourcentages
            $percentages = array_map(function ($value) use ($total) {
                return $total > 0 ? ($value / $total) * 100 : 0;
            }, $cumul);
    
            return view('graphiquecanauxrecrutement',compact('percentages'));
        }
       
    }
}
