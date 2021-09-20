<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class GenderController extends Controller
{
    //
public function searchByGenres($genretag){
$searchbygenres = Http::get('https://api.themoviedb.org/3/discover/movie?api_key=4ec327e462149c3710d63be84b81cf4f&with_genres='. $genretag);
$searchbygenresArray = json_decode($searchbygenres, true);
$searchgenres = Http::get('https://api.themoviedb.org/3/genre/movie/list?api_key=4ec327e462149c3710d63be84b81cf4f');
$genresArray = json_decode($searchgenres, true);
return view('trendingmovies', ['showgenres' =>  $genresArray['genres'], 'movies' => $searchbygenresArray['results']]);
}

}

