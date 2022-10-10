<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



route::get('/home', 'App\Http\Controllers\CarController@index');

Route::get('/create', function () {
    return view('cars.create');
});

Route::post('/create2', 'App\Http\Controllers\CarController@store');
