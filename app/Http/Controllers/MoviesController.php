<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class MoviesController extends Controller
{

    public function movies(){
        $movies = Movie::all();
        return view('movies', compact('movies'));
    }

    public function movie($id){
        $movies = Movie::all();
        $movie = $movies[$id];
        return view('movie', compact('movie'));
    }
}
