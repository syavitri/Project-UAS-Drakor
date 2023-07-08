<?php

namespace App\Http\Controllers\Administrator;

use App\Models\Genres;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GenresController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $genres = Genres::all();
        return view('administrator.genres.index', compact('genres'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('administrator.genres.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|unique:genres|max:255',
            'description' => 'required',
        ]);
        Genres::create($validatedData);
        return redirect()->route('genres.index')->with('success', 'Genres added successfully!');
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
        $genre = Genres::find($id);
        return view('administrator.genres.edit', compact('genre'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'description' => 'required',
        ]);
        Genres::find($id)->update($validatedData);
        return redirect('/administrator/genres')->with('success', 'Genres updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Genres::find($id)->delete();
        return redirect('/administrator/genres')->with('success', 'Genres deleted successfully!');
    }
}
