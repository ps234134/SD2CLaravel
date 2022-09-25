@extends('layouts.app')

@section('content')
<form action = "/songs/{id}/edit" method = "POST" class="ml-40">
         @csrf
      
         <table>
            <tr>
               <td class="border-solid border-2 border-indigo-600 font-bold">Song:</td>
               <td class="border-solid border-2 border-indigo-600">
                  <input type = 'text' name = 'song_name' 
                     value = "{{$id}}"/>
               </td>
            </tr>
            <tr>
               <td colspan = '2' class="border-solid border-2 border-indigo-600 bg-green-600 text-white">
                  <input type = 'submit' value = "Update song" />
               </td>
            </tr>
         </table>
      </form>
@endsection