<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeamController;


Route::get('/home', function () {
    return view('home');
});

Route::get('/teams', [TeamController::class, 'index'])->Name('teams');