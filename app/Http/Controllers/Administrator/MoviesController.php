<?php

namespace App\Http\Controllers\Administrator;

use App\Models\Genres;
use App\Models\Movies;
use App\Models\Countries;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MoviesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $movies = Movies::all();
        return view('administrator.movies.index', compact('movies'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $countries = Countries::all();
        $genres = Genres::all();
        return view('administrator.movies.create', compact('countries', 'genres'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedata = $request->validate([
            'title' => 'required',
            'poster' => 'required',
            'genres_id' => 'required',
            'synopsis' => 'required',
            'release_date' => 'required',
            'countries_id' => 'required',
            'rating' => 'required',
        ]);

        Movies::create($validatedata);
        return redirect('administrator/movies')->with('success', 'Movie has been created');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $movie = Movies::find($id);
        $countries = Countries::all();
        $genres = Genres::all();
        return view('administrator.movies.edit', compact('movie', 'countries', 'genres'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedata = $request->validate([
            'title' => 'required',
            'poster' => 'required',
            'genres_id' => 'required',
            'synopsis' => 'required',
            'release_date' => 'required',
            'countries_id' => 'required',
            'rating' => 'required',
        ]);

        Movies::where('id', $id)->update($validatedata);
        return redirect('administrator/movies')->with('success', 'Movie has been updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Movies::where('id', $id)->delete();
        return redirect('administrator/movies')->with('success', 'Movie has been deleted');
    }
}
