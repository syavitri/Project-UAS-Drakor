<?php

namespace App\Http\Controllers\Administrator;

use App\Models\User;
use App\Models\Movies;
use App\Models\Reviews;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        $totalreviews = Reviews::count();
        $totalusers = User::count();
        $totalmovies = Movies::count();
        $recentreviews = Reviews::orderBy('created_at', 'desc')->take(5)->get();
        $latestpostermovies = Movies::orderBy('created_at', 'desc')->take(8)->get();
        $latestmovies = Movies::orderBy('created_at', 'desc')->take(5)->get();
        return view('administrator.index', [
            'totalreviews' => $totalreviews,
            'totalusers' => $totalusers,
            'totalmovies' => $totalmovies,
            'recentreviews' => $recentreviews,
            'latestpostermovies' => $latestpostermovies,
            'latestmovies' => $latestmovies,
        ]);
    }
}
