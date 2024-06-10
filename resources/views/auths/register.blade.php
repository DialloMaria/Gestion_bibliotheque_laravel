<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inscription</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #f5f5f5;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .register-container {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
        }
        .register-container h1 {
            color: #b15633;
            font-size: 2rem;
            margin-bottom: 20px;
        }
        .form-control {
            border-radius: 20px;
            margin-bottom: 20px;
            padding: 10px 15px;
            font-size: 1rem;
        }
        .btn-custom {
            background-color: #b15633;
            color: white;
            border-radius: 20px;
            padding: 10px 20px;
            width: 100%;
            font-size: 1.1rem;
            transition: background-color 0.3s;
        }
        .btn-custom:hover {
            background-color: #ff6137;
        }
        .form-footer {
            text-align: center;
            margin-top: 20px;
        }
        .form-footer a {
            color: #b15633;
            text-decoration: none;
            transition: color 0.3s;
        }
        .form-footer a:hover {
            color: #ff6137;
        }
    </style>
</head>
<body>

<div class="register-container">
    <h1>Inscription</h1>
    @foreach ($errors->all() as $error)
        <div class="alert alert-danger">{{ $error }}</div>
    @endforeach
    <form method="POST" action="/authentification">
        @csrf
        <div class="mb-3">
            <input type="text" class="form-control" name="name" id="name" placeholder="Nom complet" value="{{ old('name') }}" required>
        </div>
        <div class="mb-3">
            <input type="email" class="form-control" name="email" id="email" placeholder="Adresse email" value="{{ old('email') }}" required>
        </div>
        <div class="mb-3">
            <input type="password" class="form-control" name="password" id="password" placeholder="Mot de passe" required>
        </div>
        <button type="submit" class="btn btn-custom">S'inscrire</button>
        <div class="form-footer">
            <p>Déjà inscrit? <a href="/login">Se connecter</a></p>
        </div>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
