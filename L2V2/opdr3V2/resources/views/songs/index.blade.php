@extends('layouts.app')

@section('content')
    @foreach ($songs as $song)
        <li>{{ $song }}</li>
    @endforeach
@endsection