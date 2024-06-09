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
        <div class="form-container">
            <form action="ajouterCategorie/traitement" method="POST">
                @csrf
                {{-- <div class="mb-3">
                    <label for="libelle" class="form-label">Libelle</label>
                    <input type="text" class="form-control" id="libelle" placeholder="Libelle" name="libelle" >
                </div> --}}

                <div class="col-md-6">
                    <label for="libelle" class="form-label">Libelle</label>
                    <select class="form-control" id="libelle" name="libelle" required>
                        <option value="" disabled selected>Choisisser une categorie</option>
                        <option value="fiction">Fiction</option>
                        <option value="roman">Roman</option>
                        <option value="developpement-personnel">Développement personnel</option>
                        <option value="jeunesse">Jeunesse</option>
                        <option value="education">Éducation</option>
                        <option value="guides-revision">Guides de révision</option>
                        <option value="arts-loisirs">Arts et Loisirs</option>
                        <option value="art-design">Art et design</option>
                        <option value="contes">Contes</option>
                        <option value="cuisine-gastronomie">Cuisine et gastronomie</option>
                        <option value="jardinage">Jardinage</option>
                        <option value="vie-pratique">Vie Pratique</option>
                        <option value="sante-bien-etre">Santé et bien-être</option>
                        <option value="sport-fitness">Sport et fitness</option>
                        <option value="maison-bricolage">Maison et bricolage</option>
                        <option value="voyages-guides-touristiques">Maison et bricolage</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" id="description" rows="3" placeholder="Description" name="description"></textarea>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Ajouter</button>
            </form>
        </div>
    </div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>