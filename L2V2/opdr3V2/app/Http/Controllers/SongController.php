<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class SongController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $songs = ['Living on a prayer', 'Nothing else matters', 'Thunderstruck', 'Back in black', 'Ace of spades'];
        return view('songs.index', ['songs' => $songs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
  
    public function showSong(Request $request)
    {
       // Usage of path method
       $name = $request -> input('song');
      return view('songs.songData', ['SongName' => $name]);
     
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($index)
    {
        $songs = ['Living on a prayer', 'Nothing else matters', 'Thunderstruck', 'Back in black', 'Ace of spades'];
        
        return view('songs.show', ['index' => $songs[$index]]);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $songs = ['Living on a prayer', 'Nothing else matters', 'Thunderstruck', 'Back in black', 'Ace of spades'];
        
        return view('songs.edit', ['id' => $id],['index' => $songs[$id]]);
        return view('songs.song_update',['id2' => $id]);
    }

    public function edit2($id)
    {
        $songs = ['Living on a prayer', 'Nothing else matters', 'Thunderstruck', 'Back in black', 'Ace of spades'];
        
       
        return view('songs.song_update',['id' => $songs[$id]]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
    $songs = ['Living on a prayer', 'Nothing else matters', 'Thunderstruck', 'Back in black', 'Ace of spades'];
       $name = $request -> input('song_name');
       return view('songs.edit', ['id' => $name],['index' => $songs[$name]]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
