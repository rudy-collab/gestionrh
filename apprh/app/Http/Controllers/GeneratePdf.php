<?php

namespace App\Http\Controllers;

use App\Models\OffreEmploi;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class GeneratePdf extends Controller
{
    public function generatepdf($id)
    {
        // Récupère la ligne spécifique depuis la base de données
        $data = OffreEmploi::find($id); 
       // Remplace YourModel par le modèle approprié

       /* if (!$data) {
            return abort(404, 'Donnée non trouvée');
        }*/

        // Charger la vue Blade qui contient les données de la ligne
       // $pdf = Pdf::loadView('generatepdf', ['data' => $data]);
        
        // Télécharger le PDF
      
        return view('generatepdf',compact( 'data'));
    }

    //generate pdf true
    public function generatepdftrue($id)
    {
        // Récupère la ligne spécifique depuis la base de données
        $data = OffreEmploi::find($id); 
       // Remplace YourModel par le modèle approprié

        if (!$data) {
            return abort(404, 'Donnée non trouvée');
        }

        // Charger la vue Blade qui contient les données de la ligne
        $pdf = Pdf::loadView('generatepdf'  , ['data' => $data]);
        
        // Télécharger le PDF
      
        return $pdf->download('document.pdf');
    }
}
