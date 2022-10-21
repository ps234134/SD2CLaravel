<?php

namespace App\Http\Controllers;

use App\Models\Pokemon;
use Illuminate\Http\Request;

class PokemonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pokemon = Pokemon::all();
        return view('posts.index', ['pokemon' => $pokemon]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'pokemon' => 'required',
            'type' => 'required',
        ]);

        $newPokemon = new Pokemon([
            'pokemon' => $request->get('pokemon'),
            'type' => $request->get('type'),
        ]);
        $newPokemon->save();

        return redirect()->route('post.index')
            ->with('success', 'Pokemon created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pokemon  $pokemon
     * @return \Illuminate\Http\Response
     */
    public function show(Pokemon $pokemon)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pokemon  $pokemon
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pokemon = Pokemon::find($id);
        return view('posts.edit', ['pokemon' => $pokemon]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pokemon  $pokemon
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'pokemon' => 'required',
            'type' => 'required',
        ]);

        $pokemon = Pokemon::find($id);
        $pokemon->pokemon = $request->get('pokemon');
        $pokemon->type = $request->get('type');
        $pokemon->save();

        return redirect()->route('post.index')
            ->with('success', 'Pokemon updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pokemon  $pokemon
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pokemon = Pokemon::find($id);
        $pokemon->delete();

        return redirect()->route('post.index')
            ->with('success', 'Pokemon deleted successfully');
    }
}
