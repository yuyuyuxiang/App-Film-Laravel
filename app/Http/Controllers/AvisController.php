<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Avis;
use App\Models\Film;

class AvisController extends Controller
{
    public function index()
    {
        // affiche la liste de tous les avis présents sur le site ordonnés par date de publication
        $avis = Avis::orderBy('datePublication', 'desc')->get();

        return view('avis.index', compact('avis'));
    }

    public function create($idFilm)
    {
        // get the film title
        $titre = Film::find($idFilm)->titre;
        return view('avis.create', compact('idFilm', 'titre'));
    }

    public function store(Request $request)
    {
        // ajoute un nouvel avis à la base de données
        $avis = new Avis();
        $avis->idFilm = $request->input('idFilm');
        $avis->titre = $request->input('titre');
        $avis->texte = $request->input('texte');
        $avis->datePublication = $request->input('datePublication');
        $avis->appreciation = $request->input('appreciation');

        // validation
        $request->validate([
            'idFilm' => 'required|integer',
            'titre' => 'required|max:255',
            'texte' => 'required|max:255',
            'datePublication' => 'required|date',
            'appreciation' => 'required|numeric|between:0,5',
        ]);

        $avis->save();

        return redirect()->route('avis.index')->with([
            'success' => 'Avis ajouté avec succès !',
            'fail' => 'Échec lors de l\'ajout de l\'avis. Réessayez !'
        ]);
    }
}
