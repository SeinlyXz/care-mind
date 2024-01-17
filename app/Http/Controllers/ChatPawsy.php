<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use OpenAI\Laravel\Facades\OpenAI;

class ChatPawsy extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('chatpawsy');
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
