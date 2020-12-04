<?php

namespace App\Http\Controllers;

use App\Episode;
use App\Genre;
use App\Movie;
use Illuminate\Http\Request;
use Ramsey\Uuid\Type\Integer;

class MovieController extends Controller
{

    public function showMovie(){
        $drama = Movie::where('genre_id', 1)->take(4)->get();
        $kids = Movie::where('genre_id', 2)->take(4)->get();    
        $tvshow = Movie::where('genre_id', 3)->take(4)->get();
        return view('main')->with('drama', $drama)->with('kids', $kids)->with('tvshow', $tvshow);
    }

    public function showMovieDetails($id){
        $movie = Movie::where('id', $id)->first();
        $genre = Genre::where('id', $movie->genre_id)->first();
        $episode = Episode::where('movie_id', $id)->paginate(3);
        return view('movie_details')->with('movie', $movie)->with('genre', $genre)->with('episode', $episode);
    }

    public function showMovieInSpecificCategory($genre_id){
        $movie = Movie::where('genre_id', $genre_id)->get();
        $genre = Genre::where('id', $genre_id)->first();
        return view('all_film_in_category')->with('movie', $movie)->with('genre', $genre);
    }
}
