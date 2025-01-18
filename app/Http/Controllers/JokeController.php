<?php

namespace App\Http\Controllers;

use App\Services\JokeService;

class JokeController extends Controller
{
    protected $jokeService;

    public function __construct(JokeService $jokeService)
    {
        $this->jokeService = $jokeService;
    }

    // Web page route to show jokes
    public function showJokes()
    {
        $jokes = $this->jokeService->fetchJokes();
        return view('jokes.index', compact('jokes'));
    }

    // API route to fetch jokes
    public function apiJokes()
    {
        return response()->json($this->jokeService->fetchJokes());
    }
}
