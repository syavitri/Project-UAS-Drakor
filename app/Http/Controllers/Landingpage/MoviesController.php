<?php

namespace App\Http\Controllers\Landingpage;

use App\Models\Genres;
use App\Models\Movies;
use App\Models\Reviews;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MoviesController extends Controller
{
    public function index()
    {
        $genres = Genres::all();
        $movies = Movies::all();
        return view('landingpage.movies.index', compact('genres', 'movies'));
    }
    public function show(string $id)
    {
        $movie = Movies::find($id);
        $review = Reviews::where('movies_id', $id)->orderBy('rating', 'desc')->first();
        return view('landingpage.movies.show', compact('movie', 'review'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'movies_id' => 'required',
            'users_id' => 'required',
            'date' => 'required',
            'rating' => 'required',
            'description' => 'required'
        ]);
        $review = new Reviews();
        $review->movies_id = $request->movies_id;
        $review->users_id = $request->users_id;
        $review->date = $request->date;
        $review->rating = $request->rating;
        $review->description = $request->description;
        $review->save();

        $reviews = Reviews::where('movies_id', $request->movies_id)->get();
        $averageRating = $reviews->avg('rating');

        $movie = Movies::find($request->movies_id);
        $movie->rating = $averageRating;
        $movie->save();
       return redirect()->route('movies.show', $request->movies_id);
    }
}
