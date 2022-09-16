<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\StudentController;

Route::get('/student', function () {
    return view('student', ['naam' => 'Sara']);
});

Route::get('/student/{naamUitUrl}',[StudentController::class, 'show']); 
