<?php

namespace App\Http\Controllers;

use App\Models\Artikels;
use Illuminate\Http\Request;

class ArtikelsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $artikels = Artikels::with('author')->get();
        $artikels = Artikels::paginate(3);
        return view('artikels.index', compact('artikels'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('artikels.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Store the request data to the database
        $artikels = $request->all();

        Artikels::create($artikels);

        // Return a response with a product json
        return response()->json([
            'status' => (bool) $artikels,
            'data'   => $artikels,
            'message' => $artikels ? 'Artikel Created!' : 'Error Creating Artikel'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Artikels $artikels)
    {
        // Get artikel by id
        $artikels = Artikels::find($artikels->id);

        // Add author to artikel
        $author = $artikels->author;
        return view('artikels.show', [
            'artikels' => $artikels,
            'author' => $author
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Artikels $artikels)
    {
        return $artikels;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Artikels $artikels)
    {
        // Get artikel by id
        $artikels = Artikels::find($artikels->id);
        return $artikels;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Artikels $artikels)
    {
        //
    }
}
