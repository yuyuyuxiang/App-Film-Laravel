<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>APP FILM</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body class="antialiased">
<h1>APP FILM</h1>
<header>
    <nav>
        <ul>
            <a href="/avis">
                <li>Avis</li>
            </a>
            <a href="/">
                <li>Films</li>
            </a>
            <a href="/films/ajouter">
                <li>Ajout Film</li>
            </a>
        </ul>
    </nav>
</header>

@if(session('success'))
    <div id="alert-success" class="alert alert-success">
        {{ session('success') }}
    </div>
@elseif(session('fail'))
    <div id="alert-danger" class="alert alert-danger">
        {{ session('fail') }}
    </div>
@endif

<div class="film-section">
    @foreach($films as $films)
        <a class="film-portrait-link" href="/films/{{$films->idFilm}}">
            <div class="film-protrait-container">
                <img class="film-img" src="{{ asset('images/' . $films->image) }}">
                <h2>{{ $films->titre }}</h2>
            </div>
        </a>
    @endforeach
</div>

<script>
    // Hide the success alert after 2 seconds
    setTimeout(function () {
        document.getElementById('alert-success').style.display = 'none';
        document.getElementById('alert-danger').style.display = 'none';
    }, 1500);
</script>

</body>
</html>
