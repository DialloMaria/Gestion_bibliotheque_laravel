<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Liste des Livres</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        body {
             /* background: linear-gradient(to right, #ff6137, #71b7e6); */
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
        }
        .top-bar {
            background-color: #b15633;
            color: white;
            padding: 10px 0;
        }
        .top-bar .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .navbar {
            background-color: #ffffff;
            box-shadow: 0 4px 6px rgba(238, 111, 37, 0.1);
        }
        .navbar-brand img {
            height: 40px;
        }
        .nav-link {
            color: #555;
            font-weight: bold;
            transition: color 0.3s;
        }
        .nav-link:hover {
            color: #ff6137;
        }
        .btn-signup {
            background-color: #b15633;
            color: white;
            border-radius: 20px;
            padding: 10px 20px;
            transition: background-color 0.3s;
        }
        .btn-signup:hover {
            background-color: #ff6137;
        }
        .container {
            margin-top: 20px;
        }
        .carousel-caption {
            background: rgba(0, 0, 0, 0.6);
            padding: 10px;
            border-radius: 10px;
        }
        .book-card {
            margin-bottom: 20px;
        }
        .book-card img {
            border-radius: 10px;
        }
        .footer {
            background-color: #333;
            color: white;
            padding: 20px 0;
            text-align: center;
            margin-top: 20px;
        }
        .btn-custom-details {
            background-color: #b15633;
            border-color: #b15633;
            color: white;
        }

        .btn-custom-details:hover {
            background-color: #9e4e2e;
            border-color: #9e4e2e;
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
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Bibliothèque</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Catégorie</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn-signup" href="login">S'inscrire</a>
                    </li>
                    <li>
                        
                        @if (Auth::user())
                        {{Auth::user()->name}}
                        <form action="{{ route('logout') }}" method="POST" class="dropdown-item">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-link">Déconnexion</button>
                        </form>
                        @endif
                    </li>
                </ul>
            </div>
        </div>
    </nav>
{{-- 
    <div class="container text-center my-5">
        <h2 class="punchline">La bibliothèque numérique de la lecture publique</h2>
    </div> --}}

    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://img.freepik.com/photos-gratuite/ramadan-kareem-eid-mubarak-lampe-royale-elegante-porte-sainte-mosquee-feux-artifice-photo-gratuite_1340-23600.jpg?t=st=1717948055~exp=1717951655~hmac=a8dc4b288828a50d339d9c36db731f600d9f859ee1fd07860c6e7850485c9587&w=1380" style="height: 80vh" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Première Image</h5>
                    <p>Descriptif de la première image.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://img.freepik.com/photos-gratuite/gros-plan-du-nouvel-an-islamique-livre-coran_23-2148611710.jpg?t=st=1717948415~exp=1717952015~hmac=90be29e1a0f8db9b3dd8880705f978a89bb5819fa1247fbb1c0cfc603d2c68ae&w=1380" class="d-block w-100"  style="height: 80vh" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Deuxième Image</h5>
                    <p>Descriptif de la deuxième image.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://img.freepik.com/photos-gratuite/ramadan-kareem-eid-mubarak-lampe-royale-elegante-porte-sainte-mosquee-feux-artifice-photo-gratuite_1340-23580.jpg?t=st=1717948178~exp=1717951778~hmac=2afb374fd567f9a54d48643b4daf303e3355d4f4db89173de2db58936830538e&w=1380" class="d-block w-100" style="height: 80vh"  alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Troisième Image</h5>
                    <p>Descriptif de la troisième image.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Précédent</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Suivant</span>
        </button>
    </div>

    <!-- Section "À propos" -->
    {{-- <section class="about-section">
        <div class="container">
          <h2>À propos de nous</h2>
          <div class="row align-items-center">
            <div class="col-md-6 fade-in">
              <p>
                                        La Bibliothèque Islamique est une institution dédiée à l'enrichissement des connaissances sur l'Islam. 
                    Notre mission est de fournir aux chercheurs, étudiants, et à la communauté une vaste collection de ressources 
                    qui couvrent divers aspects de la religion islamique, de l'histoire et de la culture musulmane.
                </p>
                <p>
                    Nous croyons en l'importance de l'éducation et de la compréhension pour promouvoir la paix et l'harmonie. 
                    Avec une collection soigneusement sélectionnée de livres, manuscrits, et articles, ainsi que des événements éducatifs et des 
                    conférences, nous nous engageons à être une source fiable et accessible pour tous ceux qui cherchent à approfondir 
                    leur connaissance de l'Islam.
                </p>
              </div>
              <div class="col-md-6 text-center slide-in">
                <img src="https://images.pexels.com/photos/3936216/pexels-photo-3936216.jpeg?auto=compress&cs=tinysrgb&w=600" class="about-image" style="height: 60vh" alt="Image à propos de nous">
              </div>
            </div>
          </div>
    </section> --}}
    <div class="top-bar">
        <div class="container">
            <p>N'ATTENDEZ PLUS POUR PROFITER D'UN ACCÈS ILLIMITÉ À LA BIBLIOTHÈQUE </p> 
                
                {{-- <form class="d-flex" id="search-form">
                    @foreach ($categories as $categorie)
                    <input class="form-control me-2" type="search" placeholder="Recherche de livres" aria-label="Search"    value="{{$categorie->libelle}}" id="search-input">
                    @endforeach
                    <button class="btn btn-outline-light" type="submit">Recherche</button>
                </form>                --}}
                <form class="d-flex" id="search-form">
                <select class="form-control" id="categorie_id" name="categorie_id" required>
                    <option value="" disabled selected>Choisissez une catégorie</option>
                    @foreach ( $categories as $categorie)
                    <option value="{{ $categorie->id }}">{{ $categorie->libelle }}</option>
                    @endforeach
                </select>
                <button class="btn btn-outline-light" type="submit">Recherche</button>
            </form> 
    
        </div>
    </div>

    <div class="container my-5">
        <h2 class="text-center">Nos livres</h2>
        <div class="row row-cols-1 row-cols-md-5 g-4">
            @foreach ($livres as $livre)
            <div class="col book-card">
                <div class="card h-100">
                    <img src="{{ $livre->image }}" style="height: 20vh" class="card-img-top" alt="Image du livre">
                    <div class="card-body">
                        <h5 class="card-title"><strong>{{ $livre->titre }}</strong></h5>
                        {{-- <a href="/livres/{{ $livre->id }}" class="btn btn-custom-details">Détails</a> --}}
                         <div class="text-center">
                        <a href="/detail/{{ $livre->id }}" class="btn btn-custom-details">
                            <i class="fas fa-info-circle"></i> Détails
                        </a>
                        {{-- <a href="/modifierLivre/{{ $livre->id }}" class="btn btn-custom btn-modifier"><i class="bi bi-pencil-square"></i>Modifier</a> --}}
                        {{-- <a href="#" class="btn btn-custom-details">
                            <i class="fas fa-play"></i> Lire
                        </a>
                        <a href="#" class="btn btn-custom-details">
                            <i class="fas fa-book-open"></i> Lire
                        </a> --}}
                    </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        {{-- <a href="/ajouterLivre" class="btn btn-link mt-3">Ajouter un Nouveau Livre</a> --}}
    </div>

    <footer class="footer">
        <div class="container">
            <p>© 2024 Sen Bibliotheque. Tous droits réservés.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
