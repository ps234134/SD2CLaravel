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
Route::get('/', function () {
    return view('welcome');
});
Route::get('/mentor1', function () {
    $nav =["mentor1", "mentor2", "mentor3", "mentor4"];
    return view('mentor1', ['title' => 'Mentor 1'],['nav' => $nav]);
});
Route::get('/mentor2', function () {
    
    $nav =["mentor1", "mentor2", "mentor3", "mentor4"];
    return view('mentor2', ['nav' => $nav]);
});
Route::get('/mentor3', function () {
    $nav =["mentor1", "mentor2", "mentor3", "mentor4"];
    return view('mentor3',['nav' => $nav]);
});
Route::get('/mentor4', function () {
    $nav =["mentor1", "mentor2", "mentor3", "mentor4"];
    return view('mentor4',['nav' => $nav]);
});
