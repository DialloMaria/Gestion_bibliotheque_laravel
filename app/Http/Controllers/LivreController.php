<?php

namespace App\Http\Controllers;

use App\Models\Livre;
use App\Models\Rayon;
use App\Models\Categorie;
use Illuminate\Http\Request;

class LivreController extends Controller
{
    public function AjouterLivre(){
        $categorie= Categorie::all(); 
        $rayon=Rayon::all();
        return view('/livres/ajouterLivre',compact('categorie'), compact('rayon'));
    }

    public function AjouterLivre_Traitement(Request $request){
        // $request->validate([
        //     'titre' => 'required',
        //     'nombre_page' => 'required',
        //     'auteur' => 'required',
        //     'isbn' => 'required',
        //     'editeur' => 'required',
        //     'categorie_id' => 'required',
        //     'categorie_id' => 'required',
        //     'rayon_id' => 'required',
        //     'disponible' => 'required',
        //     'image' => 'required',
        // ]);

        $livre = new Livre();
        $livre->titre = $request->titre;
        $livre->nombre_page = $request->nombre_page;
        $livre->auteur = $request->auteur;
        $livre->isbn = $request->isbn;
        $livre->editeur = $request->editeur;
        $livre->categorie_id = $request->categorie_id;
        $livre->rayon_id = $request->rayon_id;
        $livre->disponibilite = $request->disponibilite;
        $livre->image = $request->image;

        $livre->save();
        return redirect('/ajouterLivre');
    }

    public function ModifierLivre($id){
        $livre = Livre::find($id);
        $categories = Categorie::all(); 
        $rayons = Rayon::all();
        return view('livres.modifierLivre', compact('livre', 'categories', 'rayons'));
    }
    
    public function ModifierLivre_Traitement(Request $request){
        $livre = Livre::find($request->id);
        $livre->titre = $request->titre;
        $livre->nombre_page = $request->nombre_page;
        $livre->auteur = $request->auteur;
        $livre->isbn = $request->isbn;
        $livre->editeur = $request->editeur; 
        $livre->categorie_id = $request->categorie_id;
        $livre->rayon_id = $request->rayon_id;
        $livre->disponibilite = $request->disponibilite;
        $livre->image = $request->image;
    
        $livre->update();
        return redirect('/');
    }

    public function index()
    {
        $livres = Livre::all();
        return view('livres.index', compact('livres'));
    }

    public function SupprimerLivre($id){
        $livre=Livre::find($id);
        $livre->delete();
        return redirect('/');
    }
}
