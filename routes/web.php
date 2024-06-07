<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RayonController;
use App\Http\Controllers\CategorieController;

// Route::get('/', function () {
//     return view('welcome');
// });

//la route pour ajouter une categorie
Route::get('ajouterCategorie',[CategorieController::class, 'AjouterCategorie']);

//la route pour traiter l'ajout des categories
Route::post('ajouterCategorie/traitement',[CategorieController::class, 'AjouterCategorie_Traitement']);

//la route pour afficher la liste des categories
Route::get('listeCategorie', [CategorieController::class, 'ListeCategorie']);

// la route pour supprimer une categorie
Route::get('supprimerCategorie/{id}', [CategorieController::class, 'SupprimerCategorie']);

// Route pour afficher le formulaire de modification de la catégorie
Route::get('modifierCategorie/{id}', [CategorieController::class, 'modifierCategorie']);

// Route pour traiter la modification de la catégorie
Route::post('modifierCategorie/{id}/traitement', [CategorieController::class, 'ModifierCategorie_Traitement']);





Route::get('ajouterRayon', [RayonController::class, 'AjouterRayon']);

Route::post('ajouterRayon/traitement',[RayonController::class, 'AjouterRayon_Traitement']);

Route::get('listeRayon', [RayonController::class, 'ListeRayon']);

Route::get('supprimerRayon{id}', [RayonController::class, 'SupprimerRayon']);

