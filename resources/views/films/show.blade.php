<!-- films.blade.php -->
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

<div class="film-section">
    @foreach($films as $films)
        <div class="film-container">
            <img class="film-img" src="{{ asset('images/' . $films->image) }}">
            <h2>{{ $films->titre }}</h2>
            <br>
            <p>{{ $films->description }}</p>
            <br>
            <p>Réalisé par <b>{{ $films->directeur }}</b></p>
            <p>Date de sortie : <b>{{ $films->dateSortie }}</b></p>
            <br>
            <h4 style="background: rgb(193, 52, 106); color: white; width: 100%; text-align: center;">Ce qu'on a
                dit</h4>
            <br>
            <a href="/avis/{{ $films->idFilm }}/ajouter" class="lien-ajout-avis">Ajouter un avis</a>
            <br>
            <div class="film-avis">
                @foreach ($films->avis as $avis)
                    <h4>{{ $avis->titre }}</h4>
                    <p>{{ $avis->texte }}</p>
                    <p>Score : {{ $avis->appreciation }} / 5</p>
                    <p style="text-align: right;">{{ $avis->datePublication }}</p>
                    <hr><br>
                @endforeach
            </div>
        </div>
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
