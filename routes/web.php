<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'App\Http\Controllers\IndexController@indexcontroller');
Route::get('/search', 'App\Http\Controllers\SearchController@searchmovie');
Route::get('/genres', 'App\Http\Controllers\GenderController@searchByGenres');

Route::get('/trendingmovies', 'App\Http\Controllers\TmdbController@index');


