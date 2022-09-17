<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SongController;

Route::get('/home', function () {
    return view('home');
});

Route::get('/songs', [SongController::class, 'index'])->Name('songs');

Route::get('/songs/{$index}', [SongController::class, 'show']);
