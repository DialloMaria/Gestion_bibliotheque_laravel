<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Modifier la Catégorie</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f0f4f8;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .form-container {
            max-width: 600px;
            margin: 50px auto;
            padding: 30px;
            background-color: #ffffff;
            border-radius: 12px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .form-container h2 {
            text-align: center;
            margin-bottom: 30px;
            color: #333;
        }
        .form-label {
            font-weight: bold;
            color: #555;
        }
        .form-control {
            border-radius: 8px;
            border: 1px solid #ced4da;
            transition: border-color 0.3s, box-shadow 0.3s;
        }
        .form-control:focus {
            border-color: #b15633;
            box-shadow: 0 0 8px rgba(0, 123, 255, 0.25);
        }
        .btn-primary {
            background-color: #b15633;
            border-color: #b15633;
            border-radius: 8px;
            padding: 10px 15px;
            font-size: 1rem;
            transition: background-color 0.3s, border-color 0.3s;
        }
        .btn-primary:hover {
            background-color: #b15633;
            border-color: #b15633;
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
    {{-- SECTION FORMULAIRE POUR AJOUTER UNE CATEGORIE --}}
    <div class="container">
        <div class="form-container">
            <h2>Modifier la Catégorie</h2>
            <form action="{{ url('modifierCategorie/' . $categorie->id . '/traitement') }}" method="POST">
                @csrf
                <input type="hidden" name="id" value="{{ $categorie->id }}">
                <div class="mb-3">
                    <label for="libelle" class="form-label">Libellé</label>
                    <input type="text" class="form-control" id="libelle" placeholder="Libellé" name="libelle" value="{{ $categorie->libelle }}" required>
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" id="description" rows="4" placeholder="Description" name="description" required>{{ $categorie->description }}</textarea>
                </div>
                <button type="submit" class="btn btn-primary w-100">Modifier</button>
            </form>
            <a href="/listeCategorie" class="btn btn-custom">
                <i class="fas fa-arrow-left"></i> Retour
            </a>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
