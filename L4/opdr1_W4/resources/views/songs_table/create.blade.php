@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
       <h1 class="display-3">Add Stock</h1>
     <div>
       @if ($errors->any())
         <div class="alert alert-danger">
           <ul>
               @foreach ($errors->all() as $error)
                 <li>{{ $error }}</li>
               @endforeach
           </ul>
         </div><br />
       @endif
         <form method="POST" action="{{'/create2'}}">
             @csrf
             <div class="form-group">
                 <label for="stock_name">Title:*</label>
                 <input type="text" class="form-control" name="title"/>
             </div>

             <div class="form-group">
                 <label for="ticket">Artist:*</label>
                 <input type="text" class="form-control" name="singer"/>
             </div>


             <button type="submit" class="btn btn-primary">Add</button>
         </form>
     </div>
   </div>
</div>
@endsection
