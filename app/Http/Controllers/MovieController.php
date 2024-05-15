<?php

namespace App\Http\Controllers;

use App\Models\Movie;

class MovieController extends Controller
{
      public function __construct()
    {
        $this->middleware('auth');
    }
    //Melihat semua data
    public function getMovie()
    {
        //Melihat semua data yang ada pada model "Movie"
        $movies = Movie::all();
        //dump data atau melihat isi dari sebuah variable
        //dd($movies);
        //passing data movie ke view "movie.index"
        return view('movie.index', compact('movies'));
    }
    public function getMovieById($id)
    {
        //menampilkan data movie berdasarkan id yang dipilih
        $movie = Movie::findOrFail($id);
        return view('movie.show', compact('movie'));
    }
}
