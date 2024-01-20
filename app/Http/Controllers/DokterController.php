<?php

namespace App\Http\Controllers;

use App\Models\Dokter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class DokterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Paginate into 5 items per page.
        $dokters = Dokter::paginate(6);
        return view('dokters.index', compact('dokters'));
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
        $requestData = [
            'contents' => [
                'parts' => [
                    ['text' => $request->message]
                ]
            ]
        ];

        $apiKey = env('GEMINI_API_KEY'); // Replace with your actual API key

        $url = "https://generativelanguage.googleapis.com/v1beta/models/gemini-pro:generateContent?key=$apiKey";

        $response = Http::post($url, $requestData);
        $text = $response->json()['candidates'][0]['content']['parts'][0]['text'];

        // Handle the response as needed
        return response()->json([
            'message' => $text
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Dokter $dokter)
    {  
        $dokter = Dokter::find($dokter->id_dokter);
        return view('chatpsikolog', compact('dokter'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Dokter $dokter)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Dokter $dokter)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dokter $dokter)
    {
        //
    }
}
