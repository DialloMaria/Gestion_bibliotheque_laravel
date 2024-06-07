<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    public function AjouterCategorie(){
        return view('/categories/ajouterCategorie');
    }

    public function AjouterCategorie_Traitement(Request $request){
        // la validation des données
        $request->validate([
            'libelle'=>'required',
            'description'=>'required',
        ]);
        //Instanciation 
        $categorie = new Categorie();
        $categorie->libelle = $request->libelle;
        $categorie->description = $request->description;
        
        $categorie->save();
        return redirect('/ajouterCategorie');

    }

    public function ListeCategorie(){
        $categorie= Categorie::all();
        return view('/categories/listeCategorie', compact('categorie'));
    }

    public function SupprimerCategorie($id){
        $categorie=Categorie::find($id);
        $categorie->delete();
        return back();
    }

    public function modifierCategorie($id){
        $categorie=Categorie::find($id);
        return view('/categories/modifierCategorie', compact('categorie'));
    }

    public function ModifierCategorie_Traitement(Request $request){

        $request->validate([
            'libelle'=>'required',
            'description'=>'required',
        ]);

        $categorie=Categorie::find($request->id);
        $categorie->libelle = $request->libelle;
        $categorie->description = $request->description;

        $categorie->update();
        return redirect('/listeCategorie');
    }
}
