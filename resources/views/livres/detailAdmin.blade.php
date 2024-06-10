<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Détails du Livre</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background: #f5f5f5;
            color: #333;
        }
        .container {
            margin-top: 30px;
        }
        .book-details {
            display: flex;
            flex-direction: column;
            align-items: center;
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .book-details img {
            max-width: 300px;
            border-radius: 10px;
            margin-bottom: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .book-info {
            text-align: center;
            margin-top: 20px;
        }
        .book-info h1 {
            font-size: 2.5rem;
            margin-bottom: 20px;
            color: #b15633;
        }
        .book-info p {
            font-size: 1.1rem;
            margin-bottom: 10px;
        }
        .book-actions {
            margin-top: 30px;
            text-align: center;
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
        .footer {
            background-color: #333;
            color: white;
            padding: 20px 0;
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand" href="#">
           <h1 style="color:#9e4e2e;" ><strong> KITABI</strong></h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                {{-- <li class="nav-item">
                    <a class="nav-link active" href="#">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Bibliothèque</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Catégorie</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn-signup" href="#">S'inscrire</a>
                </li> --}}
                <p><strong>Nombre de pages :</strong> {{ $livre->nombre_page }}</p>
            </ul>
        </div>
    </div>
</nav>

<div class="dropdown">
    <button class="btn btn dropdown-toggle user-name" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
        {{ auth()->user()->name }}
    </button>
    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
        <li>
            <form action="{{ route('logout') }}" method="POST" class="dropdown-item">
                @csrf
                <button type="submit" class="btn btn-link">Déconnexion</button>
            </form>
        </li>
    </ul>
</div>

<div class="container">
    <div class="book-details">
        <img src="{{ $livre->image }}" alt="Image du livre">
        <div class="book-info">
            <h1>{{ $livre->titre }}</h1>
            <p><strong>Auteur :</strong> {{ $livre->auteur }}</p>
            <p><strong>Genre :</strong> {{ $livre->categorie->libelle }}</p>
            <p><strong>ISBN :</strong> {{ $livre->isbn }}</p>
            <p><strong>Éditeur :</strong> {{ $livre->editeur }}</p>
          
            <p><strong>Disponibilité :</strong> {{ $livre->disponibilite ? 'Disponible' : 'Indisponible' }}</p>
            <p><strong>Description :</strong> {{ $livre->description }}</p>
        </div>
        <div class="book-actions">
            <a href="/modifierLivre/{{ $livre->id }}" class="btn btn-custom">
                <i class="fas fa-edit"></i> Modifier
            </a>
            <a href="/supprimerLivre/{{ $livre->id }}" class="btn btn-custom">
                <i class="fas fa-trash-alt"></i> Supprimer
            </a>
            <a href="/" class="btn btn-custom">
                <i class="fas fa-arrow-left"></i> Retour
            </a>
        </div>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p>© 2024 Sen Bibliotheque. Tous droits réservés.</p>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
