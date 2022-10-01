<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

// Route::get('/titels', function () {
//     $data = DB::select('select * from titles');
//     dd($data);
// });

// Route::get('/titels', function () {
//     $data = DB::table('titles')->get();
//    dd($data);
// });

// Route::get('/titels', function () {
//     $data = DB::table('titles')
//     ->where('type', '=',  'business')
//     ->get();
  
//     return view('titels.index',['data'=>$data]);
//   });
  
  Route::get('/titels', function () { 
    $data = DB::table('titles') 
                ->select('title', 'type') 
                ->where('type', '=',  'business') 
                ->orderByDesc('title') 
                ->get(); 
    // $data = DB::select('select title, type from titles where type=? order by title desc', ['business']);  
    return view('titels.index',['data'=>$data]); 
});
