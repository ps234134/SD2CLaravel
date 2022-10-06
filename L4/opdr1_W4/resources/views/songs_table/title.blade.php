@extends('layouts.app')
@section('content')
    @foreach($songs as $song)
    <div class="text-2xl p-4"><a class="text-purple-500 hover:text-purple-800" href="/details/{{$song->id}}">{{$song->title}}</a></div>
    @endforeach
@endsection
