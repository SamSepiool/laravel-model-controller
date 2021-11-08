<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class MovieController extends Controller
{
    public function allMovies()
    {
        $movies = Movie::all();

        return view('index', ["movies" => $movies]);
    }
}
