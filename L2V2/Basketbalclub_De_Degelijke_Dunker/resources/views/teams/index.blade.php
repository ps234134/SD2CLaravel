@extends('layouts.app')

@section('content')
    @foreach ($teams as $team)
        <li>{{ $team }}</li>
    @endforeach
@endsection