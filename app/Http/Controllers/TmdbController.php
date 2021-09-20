<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class TmdbController extends Controller
{
    //
    public function index()
    {
        $response = Http::get('https://api.themoviedb.org/3/trending/movie/week?api_key=4ec327e462149c3710d63be84b81cf4f&sort_by=original_title.desc');
        $responseArray = json_decode($response, true);
        $searchgenres = Http::get('https://api.themoviedb.org/3/genre/movie/list?api_key=4ec327e462149c3710d63be84b81cf4f');
        $genresArray = json_decode($searchgenres, true);
        return view('trendingmovies', ['showgenres' =>  $genresArray['genres'], 'movies' => $responseArray['results']] );
    }
}
?>

