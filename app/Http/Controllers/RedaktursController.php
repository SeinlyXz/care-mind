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
        return Redakturs::all();
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
        //
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
        //
    }
}
