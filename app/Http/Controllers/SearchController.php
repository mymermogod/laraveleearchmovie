<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class SearchController extends Controller
{

    public function searchmovie (Request $request) {

    $searchurl = Http::get('https://api.themoviedb.org/3/search/movie?api_key=4ec327e462149c3710d63be84b81cf4f&sort_by=original_title.desc&query='. $request->input('search'));
    $searchArray = json_decode($searchurl, true);
    $searchgenres = Http::get('https://api.themoviedb.org/3/genre/movie/list?api_key=4ec327e462149c3710d63be84b81cf4f');
    $genresArray = json_decode($searchgenres, true);
    return view('trendingmovies', ['showgenres' =>  $genresArray['genres'], 'movies' => $searchArray['results']]);
    }
}

