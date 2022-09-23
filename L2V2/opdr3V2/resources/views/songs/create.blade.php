@extends('layouts.app')

@section('content')
    
<form class="w-full max-w-sm ml-20 mt-20" method="POST" action="/songs/songData" id="form1">
    @csrf
  <div class="flex items-center border-b border-teal-500 py-2">
    <input class="appearance-none bg-transparent border-none w-full text-gray-700 mr-3 py-1 px-2 leading-tight focus:outline-none" type="text" name="song" placeholder="Enter song name" aria-label="SongName">
    <input class="flex-shrink-0 bg-teal-500 hover:bg-teal-700 border-teal-500 hover:border-teal-700 text-sm border-4 text-white py-1 px-2 rounded" type="submit" value="Create">
  </div>
</form>
    
 
@endsection