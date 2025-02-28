<!doctype html>
<html lang="en">
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Liste des Livres</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
   <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
   <style>


:root {
            --primary-color: #b15633;
            --secondary-color: #ff6137;
            --bg-color: #f8f9fa;
            --text-color: #555;
            --light-text-color: #f8f9fa;
        }

        body {
            font-family: 'Arial', sans-serif;
            background-color: var(--bg-color);
        }

        .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            height: 100%;
            width: 250px;
            background-color: var(--primary-color);
            color: var(--light-text-color);
            padding-top: 20px;
        }

        .sidebar h3 {
            text-align: center;
            margin-bottom: 30px;
        }

        .sidebar ul {
            list-style-type: none;
            padding-left: 0;
        }

        .sidebar li {
            margin-bottom: 10px;
        }

        .sidebar a {
            color: var(--light-text-color);
            text-decoration: none;
            display: block;
            padding: 10px 15px;
            transition: background-color 0.3s;
        }

        .sidebar a:hover {
            background-color: var(--secondary-color);
            border-bottom-right-radius: 40px;
        }
       body {
           font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
           margin: 0;
           padding: 0;
       }
       .top-bar {
           background-color: #b15633;
           color: white;
           padding: 10px 0;
           margin-left: 250px;
       }
       .top-bar .container {
           display: flex;
           justify-content: space-between;
           align-items: center;
       }
       .navbar {
           background-color: #ffffff;
           margin-left: 250px;
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

       .social-icons a {
            color: var(--light-text-color);
            margin: 0 10px;
            transition: color 0.3s;
        }

        .social-icons a:hover {
            color: var(--secondary-color);
        }

        .navbar-nav .nav-item .nav-link {
            color: var(--primary-color);
            transition: color 0.3s;
        }

        .navbar-nav .nav-item .nav-link:hover {
            color: var(--secondary-color);
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
       .sidebar {
           height: 100vh;
           width: 250px;
           position: fixed;
           top: 0;
           left: 0;
           background-color: #343a40;
           padding-top: 20px;
           color: white;
       }
       .sidebar a {
           padding: 15px;
           text-decoration: none;
           font-size: 18px;
           color: white;
           display: block;
           transition: 0.3s;
       }
       .sidebar a:hover {
           background-color: #575d63;
       }
       .sidebar a.active {
           background-color: #b15633;
       }
       .main-content {
           margin-left: 250px;
           padding: 20px;
       }
       .stats-card {
           display: flex;
           align-items: center;
           justify-content: space-between;
       }
       .stats-icon {
           font-size: 3rem;
       }
       .add-category-btn {
            display: inline-block;
            padding: 10px 20px;
            font-size: 16px;
            color: #ffffff;
            background-color: #b15633;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            text-align: center;
            margin-bottom: 30px;
            transition: background-color 0.3s ease;
        }
        .add-category-btn:hover {
            background-color: #e54c30;
        }
   </style>
</head>
<body>

            <!-- Top Navbar -->
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarProfile" aria-controls="navbarProfile" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navbarProfile">
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                  {{-- <i class="fas fa-user"></i>  --}}
                                  {{ auth()->user()->name }}
                                  
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="#">Paramètres</a></li>
                                    <li>
                                        <form action="{{ route('logout') }}" method="POST">
                                            @csrf
                                            <button type="submit" class="dropdown-item">Déconnexion</button>
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
   {{-- <nav class="navbar navbar-expand-lg">
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
                   </li> --}}
                    <li>
                       {{-- @if (Auth::user())
                       {{ Auth::user()->name }}
                       <form action="{{ route('logout') }}" method="POST" class="dropdown-item">
                           @csrf
                           @method('DELETE')
                           <button type="submit" class="btn btn-link">Déconnexion deconnexion</button>
                       </form>
                       @endif --}}
                      </li>
               </ul>
           </div>
       </div>
   

   <div class="top-bar">
       <div class="container">
           <p>N'ATTENDEZ PLUS POUR PROFITER D'UN ACCÈS ILLIMITÉ À LA BIBLIOTHÈQUE</p>
              
           <form class="d-flex" id="search-form">
               <select class="form-control" id="categorie_id" name="categorie_id" required>
                   <option value="" disabled selected>Choisissez une catégorie</option>
                   @foreach ($categories as $categorie)
                   <option value="{{ $categorie->id }}">{{ $categorie->libelle }}</option>
                   @endforeach
               </select>
               <button class="btn btn-outline-light" type="submit">Recherche</button>
           </form>
       </div>
   </div>

    <div class="sidebar">
        <h3>BIBLIOTHÉQUE</h3>
        <ul>
            <li><a href="/admin"><i class="fas fa-tachometer-alt"></i>Dashboard</a></li>
            <li><a href="/listeCategorie"><i class="fas fa-tags"></i>Categorie   </a></li>
            <li><a href="listeRayon"><i class="fas fa-shelf"></i> Rayon</a></li>
            <li>
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                @method('DELETE')
               <button type="submit"class="fas fa-sign-out-alt"></button>
            </form>
            </li>
        </ul>
    </div>


   {{-- <div class="sidebar">
       <a class="active" href="#"><i class="fas fa-tachometer-alt"></i> Tableau de Bord</a>
       <a href="#"><i class="fas fa-book"></i> Livres</a>
       <a href="#"><i class="fas fa-users"></i> Utilisateurs</a>
       <a href="/ajouterLivre"><i class="fas fa-chart-line"></i> Ajouter un Nouveau Livre</a>
       <a href="#"><i class="fas fa-cog"></i> Paramètres</a>
       @if (Auth::user())
       {{ Auth::user()->name }}
       <form action="{{ route('logout') }}" method="POST" class="dropdown-item">
           @csrf
           @method('DELETE')
           <button type="submit" class="fas fa-sign-out-alt">Déconnexion</button>
       </form>
       @endif 
   </div> --}}

   <div class="main-content">
       <div class="container my-5">
           <h2 class="text-center">Nos livres</h2>
           <a href="/ajouterLivre" class="add-category-btn">
            <i class="fas fa-plus"></i> Ajouter un livre
        </a>
           <div class="row row-cols-1 row-cols-md-5 g-4">
               @foreach ($livres as $livre)
               <div class="col book-card">
                   <div class="card h-100">
                       <img src="{{ $livre->image }}" style="height: 20vh" class="card-img-top" alt="Image du livre">
                       <div class="card-body">
                           <h5 class="card-title"><strong>{{ $livre->titre }}</strong></h5>
                           <div class="text-center">
                            {{-- <a href="/description/{{ $livre->id }}" class="btn btn-custom-details">
                                <i class="fas fa-info-circle"></i> Détails
                            </a> --}}
                            <a href=" {{ route('description', ['id' => $livre->id]) }}" class="btn btn-custom-details">
                                <i class="fas fa-info-circle"></i> Détails
                            </a>
                          
                            {{-- <a href="{{ route('livres.detailAdmin', ['id' => $livre->id]) }}" class="btn btn-primary"> --}}
                                   {{-- <i class="fas fa-eye"></i> Détails
                               </a> --}}
                           </div>
                       </div>
                   </div>
               </div>
               @endforeach
           </div>
            