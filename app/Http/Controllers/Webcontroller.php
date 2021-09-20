<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Webcontroller extends Controller
{
        public function trendingmovies() {
            return view('trendingmovies');
        }
}
