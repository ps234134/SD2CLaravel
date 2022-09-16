<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index()
{
$teams = ['MSE1', 'MSE2', 'MSE3', 'MSE4', 'VSE1', 'XU14-1', 'XU12-1', 'XU8-1'];
return view('teams.index', ['teams' => $teams]);
}

}
