<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LivreController;
use App\Http\Controllers\RayonController;
use App\Http\Middleware\EnsureTokenIsValid;
use App\Http\Controllers\CategorieController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::middleware([EnsureTokenIsValid::class])->group(function () {

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

    Route::get('modifierRayon/{id}', [RayonController::class, 'modifierRayon']);

    Route::post('modifierRayon/{id}/traitement', [RayonController::class, 'ModifierRayon_Traitement']);




    Route::get('/admin' , [LivreController::class, 'dashbord'])->name('livres.dash');

    Route::get('ajouterLivre', [LivreController::class, 'AjouterLivre']);

    Route::post('ajouterLivre/traitement',[LivreController::class, 'AjouterLivre_Traitement']);

    Route::get('/modifierLivre/{id}', [LivreController::class, 'ModifierLivre'])->name('modifierLivre');

    Route::post('/modifierLivre/traitement', [LivreController::class, 'ModifierLivre_Traitement'])->name('modifierLivreTraitement');

    Route::get('supprimerLivre/{id}', [LivreController::class, 'SupprimerLivre']);

    Route::get('/description/{id}', [LivreController::class, 'Description'])->name('description'); 

});




Route::get('/', [LivreController::class, 'index']);

Route::get('detail/{id}', [LivreController::class, 'details']);


// Route::get('/login', [AuthController::class, 'login']);

// Route::post('/authentification', [AuthController::class, 'authentification']);

// Route::get('/logout', [AuthController::class, 'logout']);

//Ces routes vont nou permettre de gerer l'authentification et le traitement des donnée de l'utilisateur


//Cette route permet à l'utilisateur de se deconnecter
// Route::get('/logout', [AuthController::class, 'logout'])->name('logout');



Route::get('/login', [AuthController::class , 'login']);

Route::post('/login_traitement' , [AuthController::class , 'LoginTraitement' ]);

Route::delete('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/register', [AuthController::class, 'showRegisterForm']);

Route::post('/authentification', [AuthController::class, 'registe']); 