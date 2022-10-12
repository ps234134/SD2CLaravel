@extends('layouts.app')
@section('content')

    <div class=".container ml-64 max-w-lg">
       <h1 class="text-5xl">Edit Car</h1>

       @if ($errors->any())
         <div class="alert alert-danger">
           <ul>
               @foreach ($errors->all() as $error)
                 <li>{{ $error }}</li>
               @endforeach
           </ul>
         </div><br />
       @endif
         <form method="POST" action="{{ route('cars.update', $cars->id) }}" class="ml-100 border-solid border-2 border-indigo-600 text-3xl">
             @method('PATCH')
             @csrf
             <div class="form-group border-solid border-2 border-indigo-300">
                 <label for="stock_name">Merk:*</label>
                 <input type="text" class="form-control" name="merk" value="{{$cars->merk}}"/>
             </div>

             <div class="form-group border-solid border-2 border-indigo-300">
                 <label for="ticket">Type:*</label>
                 <input type="text" class="form-control" name="type" value="{{$cars->type}}"/>
             </div>

             <div class="form-group border-solid border-2 border-indigo-300">
                <label for="ticket">Bouwjaar:*</label>
                <input type="text" class="form-control" name="bouwjaar" value="{{$cars->bouwjaar}}"/>
            </div>


             <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Edit</button>
         </form>
    </div>


@endsection
