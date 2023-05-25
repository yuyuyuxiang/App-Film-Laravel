<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>APP FILM</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body class="antialiased">
<h1>Ajouter un film</h1>
<header>
    <nav>
        <ul>
            <a href="/avis">
                <li>Avis</li>
            </a>
            <a href="/">
                <li>Films</li>
            </a>
        </ul>
    </nav>
</header>

@if ($errors->any())
    <div id="alert-danger" class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="POST" action="/films">
    @csrf
    <label for="titre">Titre :</label>
    <input type="text" name="titre" id="titre" required style="width: 300px;">
    <label for="directeur">Directeur :</label>
    <input type="text" name="directeur" id="directeur" required style="width: 300px;">
    <label for="dateSortie">Date de sortie :</label>
    <input type="date" name="dateSortie" id="dateSortie" required style="width: 300px;">
    <label for="image">Image :</label>
    <input type="text" name="image" id="image" required style="width: 300px;">
    <label for="description">Description :</label>
    <textarea name="description" id="description" required style="width: 300px; height: 300px;"></textarea>

    <button type="submit">Ajouter</button>
</form>
<script>
    // Hide the success alert after 2 seconds
    setTimeout(function () {
        document.getElementById('alert-danger').style.display = 'none';
    }, 1500);
</script>
</body>
</html>
