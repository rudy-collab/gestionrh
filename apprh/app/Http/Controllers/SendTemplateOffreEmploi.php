<?php

namespace App\Http\Controllers;

use App\Models\OffreEmploi;
use Illuminate\Http\Request;
use Wavey\Sweetalert\Sweetalert;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\TemplateOffreEmploiMail;
use App\Notifications\SendTempOffreWork;


class SendTemplateOffreEmploi extends Controller
{

    public function sendtemplateoffre($id)
    {
       
        $data=OffreEmploi::find($id);
      
      
      
       
      return view('sendtemplateoffre',compact('data'));
    }
    
//offre et formulaire

    public function offresetformulaire($id)
    {
       
        $data=OffreEmploi::find($id);
      

      return view('offresetformulaire',compact('data'));
    }

//

  
    
    public function sendtemplateoffreAll(Request $request,$id)
    {
        // Valider l'adresse e-mail
        $request->validate([
            'email' => 'required|email',
            'titre' => 'required|string',
            'description' => 'required|string',
        ]);

        // Définir les détails de l'e-mail
        $details = [
            'titre' => $request->input('titre'),
            'description'=>$request->input('description'),
            
        ];
        $data= OffreEmploi::find($id);
       
      
        // Envoyer l'e-mail
        Mail::to($request->input('email'))->send(new TemplateOffreEmploiMail($details,$data));
     
        Sweetalert::success('Merci...', 'E-mail envoyé avec succès');
       
      return redirect()->route('voirlesoffresemplois');
    }
}
