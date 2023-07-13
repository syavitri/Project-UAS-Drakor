<?php

namespace App\Http\Controllers\Administrator;

use App\Models\User;
use App\Models\Movies;
use App\Models\Reviews;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ReviewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reviews = Reviews::all();
        return view('administrator.reviews.index', compact('reviews'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $movies = Movies::all();
        $users = User::all();
        return view('administrator.reviews.create', compact('movies', 'users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedata = $request->validate([
            'movies_id' => 'required',
            'users_id' => 'required',
            'date' => 'required',
            'description' => 'required',
            'rating' => 'required',
        ]);
        Reviews::create($validatedata);
        return redirect('administrator/reviews')->with('success', 'Review has been created');
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
        $review = Reviews::find($id);
        $movies = Movies::all();
        $users = User::all();
        return view('administrator.reviews.edit', compact('review', 'movies', 'users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedata = $request->validate([
            'movies_id' => 'required',
            'users_id' => 'required',
            'date' => 'required',
            'description' => 'required',
            'rating' => 'required',
        ]);
        Reviews::where('id', $id)->update($validatedata);
        return redirect('administrator/reviews')->with('success', 'Review has been updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Reviews::where('id', $id)->delete();
        return redirect('administrator/reviews')->with('success', 'Review has been deleted');
    }
}
