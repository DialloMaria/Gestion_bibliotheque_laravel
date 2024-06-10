<?php

namespace App\Http\Controllers;

use App\Models\Livre;
use App\Models\Rayon;
use App\Models\Categorie;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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


         //  Cette ligne de code nous a permis de créer un utilisateur

        //  User::create([
        //     'name' => 'Rama',
        //     'email' => 'ram@gmail.com',
        //     'password' => Hash::make('00000')
        // ]); 

        $livres = Livre::all();
        $categories = Categorie::all(); 
        return view('livres.index', compact('livres','categories'));
    }

    public function SupprimerLivre($id){
        $livre=Livre::find($id);
        $livre->delete();
        return redirect('/');
    }
    public function DetailsLivre($id){
        $livre=Livre::findOrFail($id);
        return view('livres.detail', compact('livre'));
    }

    public function dashbord(){
        return view('livres/dashbord');
    }
}
