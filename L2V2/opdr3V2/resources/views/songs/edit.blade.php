@extends('layouts.app')

@section('content')
<table class="border-solid border-2 border-indigo-600 ml-40">
         <tr class="border-solid border-2 border-indigo-600">
            <td class="border-solid border-2 border-indigo-600 font-bold">ID</td>
            <td class="border-solid border-2 border-indigo-600 font-bold">Song</td>
            <td class="border-solid border-2 border-indigo-600 font-bold">Edit</td>
         </tr>
         
         <tr class="border-solid border-2 border-indigo-600">
            <td class="border-solid border-2 border-indigo-600">{{$id}}</td>
            <td class="border-solid border-2 border-indigo-600">{{$index}}</td>
            <td class="border-solid border-2 border-indigo-600 bg-green-600 text-white"><a href="/songs/{{$id}}/update">Edit</a></td>
         </tr>
        
      </table>
@endsection