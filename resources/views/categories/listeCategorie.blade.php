<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    body {
        background-color: #f8f9fa;
    }
    .card-container {
        max-width: 1200px;
        margin: 50px auto;
    }
    .card {
        margin-bottom: 20px;
        border: 1px solid #dee2e6;
        border-radius: 10px;
    }
    .card-header {
        background-color: #007bff;
        color: #ffffff;
        font-weight: bold;
    }
    .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
    }
    .btn-primary:hover {
        background-color: #0056b3;
        border-color: #0056b3;
    }
</style>
<body>
    {{-- SECTION LISTE DES CATEGORIES --}}
 
        
    {{-- <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title"> {{$categories->libelle}} </h5>
          <p class="card-text"> {{$categories->description}} </p>
          <a href="#" class="btn btn-primary"> {{$categories->created_at}} </a>
        </div>
      </div> --}}
      <div class="contenaire">
        <div class="card-contenaire">
            <div class="row">
                <h2>LISTE DES CATEGORIES</h2>
                @foreach ($categorie as $categories)
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            {{$categories->libelle}}
                        </div>
                        <div class="card-body">
                            <p class="card-text"> {{$categories->description}}</p>
                            <div class="text-right">
                                <button class="btn btn-sm btn-info">Voir</button>
                                <a href="modifierCategorie/{{$categories->id}}"><button class="btn btn-sm btn-warning">Modifier</button></a>
                            <a href="supprimerCategorie/{{$categories->id}}"><button class="btn btn-sm btn-danger">Supprimer</button></a> 
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
      </div>
</body>
</html>