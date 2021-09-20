<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MovieController extends Controller
{
    //
    public function searchmovieid ($requestid) {

        $searchurlid = Http::get('https://api.themoviedb.org/3/movie/'. $requestid . '?api_key=4ec327e462149c3710d63be84b81cf4f');
        $searchidArray = json_decode($searchurlid, true);
        $searchgenres = Http::get('https://api.themoviedb.org/3/genre/movie/list?api_key=4ec327e462149c3710d63be84b81cf4f');
        $genresArray = json_decode($searchgenres, true);
        return view('trendingmovies', ['showgenres' =>  $genresArray['genres'], 'movies' => $searchArray['title']]);
        }
}


