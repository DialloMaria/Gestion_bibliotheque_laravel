<?php

namespace App\Http\Controllers;

use App\Models\Rayon;
use Illuminate\Http\Request;

class RayonController extends Controller
{
    public function AjouterRayon(){
        return view('/rayons/ajouterRayon');
    }
    
    public function AjouterRayon_Traitement(Request $request){
        // la validation des données
        $request->validate([
            'libelle'=>'required',
            'partie'=>'required',
        ]);
        //Instanciation 
        $categorie = new Rayon();
        $categorie->libelle = $request->libelle;
        $categorie->partie= $request->partie;
        
        $categorie->save();
        return redirect('/ajouterRayon');

    }
}
