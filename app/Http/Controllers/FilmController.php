<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Film;
use App\Models\Avis;

class FilmController extends Controller
{
    public function index()
    {
        // affiche la liste des films
        $films = Film::all();
        return view('films.index', compact('films'));
    }

    public function show($idFilm)
    {
        // affiche les détails d'un film
        $films = Film::where('idFilm', $idFilm)->get();
        $avis = Avis::where('idFilm', $idFilm)->get();
        return view('films.show', compact('films', 'avis'));
    }

    public function create()
    {
        // affiche le formulaire d'ajout d'un films
        return view('films.create');
    }

    public function store(Request $request)
    {
        // ajoute un nouveau films à la base de données
        $film = new Film();
        $film->titre = $request->input('titre');
        $film->directeur = $request->input('directeur');
        $film->dateSortie = $request->input('dateSortie');
        $film->description = $request->input('description');
        $film->image = $request->input('image');

        // validation
        $request->validate([
            'titre' => 'required|max:255',
            'directeur' => 'required|max:255',
            'dateSortie' => 'required|date',
            'description' => 'required|max:255',
            'image' => 'required|max:255',
        ]);

        $film->save();

        return redirect()->route('films.index')->with([
            'success' => 'Film ajouté avec succès !',
            'fail' => 'Échec lors de l\'ajout du film. Réessayez !'
        ]);
    }
}
