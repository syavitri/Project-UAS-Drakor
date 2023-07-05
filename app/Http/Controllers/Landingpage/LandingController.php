<?php

namespace App\Http\Controllers\Landingpage;

use App\Http\Controllers\Controller;
use App\Models\Genres;
use App\Models\Movies;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        $movieterpopuler = Movies::orderBy('rating', 'desc')->limit(5)->get();
        $genres = Genres::has('movies')->get();;
        return view('landingpage.index', compact('movieterpopuler', 'genres'));
    }
}
