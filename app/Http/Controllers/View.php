<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Serie as Serie;
use App\Genre as Genre;
use App\Actor as Actor;

class View extends Controller
{
    public function home()
    {
      return view('welcome');
    }
    public function series()
    {
      // Get all series from series table via Serie Model
      $series = Serie::all();
      // AFFICHE L'ACTEUR ET LE GENRE DE LA SERIE
      return view('series', ['series' => $series]);
    }
    public function addSeries()
    {
      // Charger tout les genres
      // Charger tout les acteurs
      $actors = Actor::all();
      $genres = Genre::all();
      return view('addseries', [
        "actors" => $actors,
        "genres" => $genres,
      ]);
    }
    public function updateForm(Request $request)
    {
      $serie = Serie::find($request->input('id'));
      $actors = Actor::all();
      $genres = Genre::all();
      return view('update', [
        'serie' => $serie,
        'actors' => $actors,
        'genres' => $genres,
      ]);
    }



















}
