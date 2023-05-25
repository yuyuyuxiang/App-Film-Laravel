<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\AvisController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// affiche la liste des avis et des films
Route::get('/avis', [AvisController::class, 'index'])->name('avis.index');
Route::get('/', [FilmController::class, 'index'])->name('films.index');

// affiche le formulaire d'ajout d'un films
Route::get('/films/ajouter', [FilmController::class, 'create'])->name('films.create');

// affiche les détails d'un film spécifique et ses avis
Route::get('/films/{idFilm}', [FilmController::class, 'show'])->name('films.show');

// traite la soumission du formulaire d'ajout d'un films
Route::post('/films', [FilmController::class, 'store']);

// affiche le formulaire d'ajout d'un avis
Route::get('/avis/{idFilm}/ajouter', [AvisController::class, 'create'])->name('avis.create');
// traite la soumission du formulaire d'ajout d'un films
Route::post('/avis', [AvisController::class, 'store']);
