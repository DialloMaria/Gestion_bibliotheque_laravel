<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    {{-- SECTION LISTE DES CATEGORIES --}}
    @foreach ($categorie as $categories)
        
    @endforeach
    <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title"> {{$categories->libelle}} </h5>
          <p class="card-text"> {{$categories->description}} </p>
          <a href="#" class="btn btn-primary"> {{$categories->created_at}} </a>
        </div>
      </div>
</body>
</html>