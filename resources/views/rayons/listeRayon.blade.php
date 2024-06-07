<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="contenaire">
        <div class="card-contenaire">
            <div class="row">
                <h2></h2>
                @foreach ($rayon as $rayons)
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            {{$rayons->libelle}}
                        </div>
                        <div class="card-body">
                            <p class="card-text"> {{$rayons->partie}}</p>
                            <div class="text-right">
                                <button class="btn btn-sm btn-info">Voir</button>
                                <a href="modifierRayon/{{$rayons->id}}"><button class="btn btn-sm btn-warning">Modifier</button></a>
                            <a href="supprimerRayon{{$rayons->id}}"><button class="btn btn-sm btn-danger">Supprimer</button></a> 
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