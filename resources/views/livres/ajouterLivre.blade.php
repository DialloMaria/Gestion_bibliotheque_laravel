<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ajouter un Livre</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(to right, #ff6137, #71b7e6);
            font-family: sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
            max-width: 600px;
            width: 100%;
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333333;
        }
        .form-label {
            font-weight: bold;
            color: #555555;
        }
        .form-control {
            border-radius: 10px;
            border: 1px solid #ced4da;
            padding: 10px;
            transition: all 0.3s;
        }
        .form-control:focus {
            border-color: #71b7e6;
            box-shadow: 0 0 10px rgba(113, 183, 230, 0.25);
        }
        .btn-primary {
            width: 100%;
            border-radius: 10px;
            background: linear-gradient(135deg, #71b7e6, #ff6137);
            border: none;
            padding: 10px;
            font-size: 1rem;
            transition: background 0.3s;
        }
        .btn-primary:hover {
            background: linear-gradient(135deg, #ff6137, #71b7e6);
        }
    </style>
</head>
<body>
php
Copy code
<div class="container">
    <h2>Ajouter un Livre</h2>

    <form action="/ajouterLivre/traitement" method="POST">
        @csrf
        <div class="row mb-3">
            <div class="col-md-6">
                <label for="titre" class="form-label">Titre</label>
                <input type="text" class="form-control @error('titre') is-invalid @enderror" id="titre" name="titre" placeholder="Titre du livre" required>
                @error('titre')
                <div class="text-danger">Choisir une catégorie</div>
                @enderror
            </div>
            <div class="col-md-6">
                <label for="nombre_page" class="form-label">Nombre de pages</label>
                <input type="number" class="form-control" id="nombre_page" name="nombre_page" placeholder="Nombre de pages" required>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-6">
                <label for="auteur" class="form-label">Auteur</label>
                <input type="text" class="form-control  @error('auteur') is-invalid @enderror" id="auteur" name="auteur" placeholder="Auteur du livre" required>
            </div>
            @error('auteur')
            <div class="text-danger">Choisir une catégorie</div>
            @enderror
            <div class="col-md-6">
                <label for="isbn" class="form-label">ISBN</label>
                <input type="text" class="form-control  @error('isbn') is-invalid @enderror " id="isbn" name="isbn" placeholder="ISBN du livre" required>
            </div>
            @error('isbn')
            <div class="text-danger">Choisir une catégorie</div>
            @enderror
        </div>
        <div class="row mb-3">
            <div class="col-md-6">
                <label for="editeur" class="form-label">Éditeur</label>
                <input type="text" class="form-control" id="editeur" name="editeur" placeholder="Éditeur du livre" required>
            </div>
            <div class="col-md-6">
                <label for="categorie_id" class="form-label">Catégorie</label>
                <select class="form-control  @error('categorie') is-invalid @enderror " id="categorie_id" name="categorie_id" required>
                    <option value="" disabled selected>Choisissez une catégorie</option>
                    @foreach ( $categorie as $categories)
                    <option value="{{ $categories->id }}">{{ $categories->libelle }}</option>
                    @endforeach
                </select>
                @error('categorie')
                <div class="text-danger">Choisir une catégorie</div>
                @enderror
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-6">
                <label for="rayon" class="form-label">Rayon</label>
                <select class="form-control  @error('rayon') is-invalid @enderror" id="rayon" name="rayon_id" required>
                    <option value="" disabled selected>Choisissez un rayon</option>
                    @foreach ($rayon as $rayons)
                    <option value="{{ $rayons->id }}">{{ $rayons->libelle }}</option>
                    @endforeach
                </select>
                @error('categorie')
                <div class="text-danger">Choisir une catégorie</div>
                @enderror
            </div>
            <div class="col-md-6">
                <label for="disponibilite" class="form-label">Disponibilité</label>
                <select class="form-control" id="disponibilite" name="disponibilite" required>
                    <option value="1">Disponible</option>
                    <option value="0">Indisponible</option>
                </select>
                @error('diponibilite')
                <div class="text-danger">Veillez mettre la disponobilité du livre</div>
                @enderror
            </div>

        </div>
        <div class="row mb-3">
            <div class="col-md-12">
                <label for="image" class="form-label">Image</label>
                <input type="text" class="form-control @error('image') is-invalid @enderror " name="image" id="image">
                @error('image')
                <div class="text-danger">Inserer une image</div>
                @enderror
            </div>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control  @error('description') is-invalid @enderror "  id="description" name="description" rows="3" placeholder="Description du livre" required></textarea>
            @error('description')
            <div class="text-danger">Saisissez le contenu du champ</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Ajouter</button>
    </form>
    <div class="d-flex justify-content-center mt-3">
        {{-- <a href="" class="btn btn-custom btn-details"><i class="bi bi-info-circle"></i>Détails</a>
        <a href="" class="btn btn-custom btn-modifier"><i class="bi bi-pencil-square"></i>Modifier</a>
        <form action="" method="POST" style="display: inline;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-custom btn-supprimer"><i class="bi bi-trash"></i>Supprimer</button>
        </form> --}}
    </div>
    <a href="/" class="btn btn-link mt-3">Retour</a>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>