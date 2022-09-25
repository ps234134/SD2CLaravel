<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SongController;

Route::get('/home', function () {
    return view('home');
});


//show songs page
Route::get('/songs', [SongController::class, 'index'])->Name('songs');

//show 'show' page with index from array in controller
Route::get('/songs/{index}', [SongController::class, 'show']);

//show create page and new page with created song
Route::get('/create', function () {
    return view('songs.create');
});

Route::post('/songs/songData', [SongController::class, 'showSong']); 

//show edit page

Route::get('/songs/{id}/edit', [SongController::class, 'edit']);
Route::get('/songs/{id}/update', [SongController::class, 'edit2']);
Route::post('/songs/{id}/edit', [SongController::class, 'update']);