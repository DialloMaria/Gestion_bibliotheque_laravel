<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ajouter un Livre</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(to right, #b15633, #575d63); 
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
            background: #b15633;
            border: none;
            padding: 10px;
            font-size: 1rem;
            transition: background 0.3s;
        }
        .btn-primary:hover {
            background: linear-gradient(to right, #575d63, #b15633); 
        }
        .btn-custom {
            background-color: #b15633;
            color: white;
            border-radius: 20px;
            padding: 10px 20px;
            margin: 5px;
            transition: background-color 0.3s;
        }
        .btn-custom:hover {
            background-color: #ff6137;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Modifier un Livre</h2>
        <form action="{{ route('modifierLivreTraitement') }}" method="POST">
            @csrf
            <input type="hidden" name="id" value="{{ $livre->id }}">
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="titre" class="form-label">Titre</label>
                    <input type="text" class="form-control" id="titre" name="titre" placeholder="Titre du livre" value="{{ $livre->titre }}" required>
                </div>
                <div class="col-md-6">
                    <label for="nombre_page" class="form-label">Nombre de pages</label>
                    <input type="number" class="form-control" id="nombre_page" name="nombre_page" placeholder="Nombre de pages" value="{{ $livre->nombre_page }}" required>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="auteur" class="form-label">Auteur</label>
                    <input type="text" class="form-control" id="auteur" name="auteur" placeholder="Auteur du livre" value="{{ $livre->auteur }}" required>
                </div>
                <div class="col-md-6">
                    <label for="isbn" class="form-label">ISBN</label>
                    <input type="text" class="form-control" id="isbn" name="isbn" placeholder="ISBN du livre" value="{{ $livre->isbn }}" required>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="editeur" class="form-label">Éditeur</label>
                    <input type="text" class="form-control" id="editeur" name="editeur" placeholder="Éditeur du livre" value="{{ $livre->editeur }}" required>
                </div>
                <div class="col-md-6">
                    <label for="categorie_id" class="form-label">Catégorie</label>
                    <select class="form-control" id="categorie_id" name="categorie_id" required>
                        <option value="" disabled>Choisissez une catégorie</option>
                        @foreach ($categories as $categorie)
                            <option value="{{ $categorie->id }}" {{ $livre->categorie_id == $categorie->id ? 'selected' : '' }}>{{ $categorie->libelle }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="rayon_id" class="form-label">Rayon</label>
                    <select class="form-control" id="rayon_id" name="rayon_id" required>
                        <option value="" disabled>Choisissez un rayon</option>
                        @foreach ($rayons as $rayon)
                            <option value="{{ $rayon->id }}" {{ $livre->rayon_id == $rayon->id ? 'selected' : '' }}>{{ $rayon->libelle }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="disponibilite" class="form-label">Disponibilité</label>
                    <select class="form-control" id="disponibilite" name="disponibilite" required>
                        <option value="1" {{ $livre->disponibilite ? 'selected' : '' }}>Disponible</option>
                        <option value="0" {{ !$livre->disponibilite ? 'selected' : '' }}>Indisponible</option>
                    </select>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-12">
                    <label for="image" class="form-label">Image</label>
                    <input type="text" class="form-control" name="image" id="image" value="{{ $livre->image }}">
                </div>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" name="description" rows="3" placeholder="Description du livre" required>{{ $livre->description }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Modifier</button>
        </form>
        <a href="/admin" class="btn btn-custom">
            <i class="fas fa-arrow-left"></i> Retour
        </a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
