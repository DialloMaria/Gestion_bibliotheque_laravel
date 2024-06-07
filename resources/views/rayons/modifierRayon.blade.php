<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<style>
    body {
        background-color: #f8f9fa;
    }
    .form-container {
        max-width: 500px;
        margin: 50px auto;
        padding: 30px;
        background-color: #ffffff;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    .form-label {
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
    {{-- SECTION FORMULAIRE POUR AJOUTER UNE CATEGORIE --}}
    <div class="container">
        <h2>MODIFIER LE RAYON</h2>
        <div class="form-container">
            <form action="{{ url('modifierRayon/' . $rayon->id . '/traitement') }}" method="POST">
                @csrf
                <input type="hidden" name="id" value="{{ $rayon->id }}">
                <div class="mb-3">
                    <label for="libelle" class="form-label">Libelle</label>
                    <input type="text" class="form-control" id="libelle" placeholder="Libelle" name="libelle" value="{{$rayon->libelle}} ">
                </div>
                <div class="mb-3">
                    <label for="partie" class="form-label">Partie</label>
                    <textarea class="form-control" id="partie" rows="3" placeholder="partie" name="partie">{{$rayon->partie}}</textarea>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Modifier</button>
            </form>
        </div>
    </div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>