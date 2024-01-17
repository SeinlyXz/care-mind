<?php

namespace App\Http\Controllers;

use App\Models\Redakturs;
use Illuminate\Http\Request;

class RedaktursController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $redakturs = Redakturs::all();
        return view('redaktur.index', compact('redakturs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Redakturs $redakturs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Redakturs $redakturs)
    {
        return view('redaktur.edit', compact('redakturs'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Redakturs $redakturs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Redakturs $redakturs)
    {
        $redaktur = Redakturs::find($redakturs->id);
        // check if redaktur exists before deleting
        if (!isset($redaktur)){
            return view('redaktur.index')->with('error', 'redaktur not found');
        }
        $redaktur->delete();
        // return with http status code 200
        return redirect('/redaktur')->with('code', '204');
    }
}
