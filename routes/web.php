<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategorieController;

// Route::get('/', function () {
//     return view('welcome');
// });

//la route pour ajouter une categorie
Route::get('ajouterCategorie',[CategorieController::class, 'AjouterCategorie']);

//la route pour traiter l'ajout des categories
Route::post('ajouterCategorie/traitement',[CategorieController::class, 'AjouterCategorie_Traitement']);

Route::get('listeCategorie', [CategorieController::class, 'ListeCategorie']);