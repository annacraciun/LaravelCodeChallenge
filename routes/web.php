<?php

use App\Http\Controllers\JokeController;
use Illuminate\Support\Facades\Route;

// Web page route
Route::get('/', [JokeController::class, 'showJokes']);

// API route to fetch jokes
Route::get('/api/jokes', [JokeController::class, 'apiJokes']);
