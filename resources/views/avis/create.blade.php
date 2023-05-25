<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>APP FILM</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body class="antialiased">
<h1>Ajouter un avis</h1>
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

<form method="POST" action="/avis">
    @csrf
    <h2>Film : {{$titre}}</h2>
    <input type="text" name="idFilm" id="idFilm" required style="width: 300px;" value="{{$idFilm}}" hidden>
    <label for="titre">Titre :</label>
    <input type="text" name="titre" id="titre" required style="width: 300px;">
    <label for="texte">Texte :</label>
    <input type="text" name="texte" id="texte" required style="width: 300px;">
    <input type="date" name="datePublication" id="datePublication" required style="width: 300px;"
           value="{{ date('Y-m-d') }}" hidden>
    <label for="appreciation">Appréciation (sur 5) :</label>
    <input type="number" name="appreciation" id="appreciation" min="0" max="5" required style="width: 300px;">

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
