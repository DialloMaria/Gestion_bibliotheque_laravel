<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Liste des Livres</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(to right, #ff6137, #71b7e6);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 20px;
        }
        .container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
            max-width: 800px;
            margin: auto;
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333333;
            font-weight: bold;
        }
        .table th, .table td {
            vertical-align: middle;
        }
        .btn-custom {
            background-color: #71b7e6;
            color: white;
            border: none;
            border-radius: 10px;
            margin: 5px;
            padding: 5px 10px;
            transition: background-color 0.3s;
        }
        .btn-custom:hover {
            background-color: #ff6137;
            color: white;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Liste des Livres</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Titre</th>
                    <th>Auteur</th>
                    <th>ISBN</th>
                    <th>Éditeur</th><!doctype html>
                    <html lang="en">
                    <head>
                        <meta charset="utf-8">
                        <meta name="viewport" content="width=device-width, initial-scale=1">
                        <title>Liste des Livres</title>
                        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
                        <style>
                            body {
                                background: linear-gradient(to right, #ff6137, #71b7e6);
                                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                                margin: 0;
                                padding: 20px;
                            }
                            .container {
                                background-color: #ffffff;
                                padding: 20px;
                                border-radius: 15px;
                                box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
                                max-width: 800px;
                                margin: auto;
                            }
                            h2 {
                                text-align: center;
                                margin-bottom: 20px;
                                color: #333333;
                                font-weight: bold;
                            }
                            .table th, .table td {
                                vertical-align: middle;
                            }
                            .btn-custom {
                                background-color: #71b7e6;
                                color: white;
                                border: none;
                                border-radius: 10px;
                                margin: 5px;
                                padding: 5px 10px;
                                transition: background-color 0.3s;
                            }
                            .btn-custom:hover {
                                background-color: #ff6137;
                                color: white;
                            }
                        </style>
                    </head>
                    <body>
                        <div class="container">
                            <h2>Liste des Livres</h2>
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Titre</th>
                                        <th>Auteur</th>
                                        <th>ISBN</th>
                                        <th>Éditeur</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($livres as $livre)
                                    <tr>
                                        <td>{{ $livre->titre }}</td>
                                        <td>{{ $livre->auteur }}</td>
                                        <td>{{ $livre->isbn }}</td>
                                        <td>{{ $livre->editeur }}</td>
                                        <td>
                                            <a href="/livres/{{ $livre->id }}" class="btn btn-custom btn-details"><i class="bi bi-info-circle"></i></a>
                                            <a href="/modifierLivre/{{$livre->id}}" class="btn btn-custom btn-modifier"><i class="bi bi-pencil-square"></i></a>
                                            {{-- <form action="supprimerLivre/{{$livre->id}}" method="POST" style="display: inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-custom btn-supprimer"><i class="bi bi-trash"></i></button>
                                            </form> --}}
                                            <a href="SpprimerLivre/{{$livre->id}}"><button class="btn btn-custom btn-supprimer"><i class="bi bi-pencil-square"></i></button></a>

                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <a href="/ajouterLivre" class="btn btn-link mt-3">Ajouter un Nouveau Livre</a>
                        </div>
                        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
                    </body>
                    </html>
                    
                    <th>Actions</th>
                </tr>
            </thead>
        </table>
        <a href="/ajouterLivre" class="btn btn-link mt-3">Ajouter un Nouveau Livre</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
