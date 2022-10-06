@extends('layouts.app')
@section('content')
<table class="border-solid border-2 border-indigo-600 ml-40">
    <thead>
        <tr class="border-solid border-2 border-indigo-600">
            <th>Title</th>
            <th class="border-solid border-2 border-indigo-600">Artist</th>

        </tr>
    </thead>
    <tbody>
        <tr class="border-solid border-2 border-indigo-600">
            <td class="border-solid border-2 border-indigo-600">{{ $songs->title}}</td>
            <td>{{ $songs->singer}}</td>
        </tr>
@endsection
