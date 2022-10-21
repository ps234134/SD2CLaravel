@extends('layouts.app-layout')
@section('content')
<div class="font-sans antialiased">
    <div class="flex flex-col items-center min-h-screen pt-6 bg-gray-100 sm:justify-center sm:pt-0">

        <div class="w-full px-16 py-20 mt-6 overflow-hidden bg-white rounded-lg lg:max-w-4xl">

            <div class="mb-4">
                <h1 class="font-serif text-3xl font-bold">Update Pokemon</h1>
            </div>

            @if ($errors->any())
            <div class="alert alert-danger">
              <ul>
                  @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                  @endforeach
              </ul>
            </div><br />
          @endif

            <div class="w-full px-6 py-4 bg-white rounded shadow-md ring-1 ring-gray-900/10">
                <form method="POST" action="{{ route('post.update', $pokemon->id) }}" >
                    @method('PATCH')
                    @csrf
                    <div>
                        <label class="block text-sm font-medium text-gray-700" for="pokemon">
                            Pokemon
                        </label>

                        <input
                            class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 placeholder:text-right focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                            type="text" name="pokemon" placeholder="100" value="{{old('pokemon',$pokemon->pokemon)}}">
                        @error('pokemon')
                        <span class="text-red-600 text-sm">
                            {{ $message }}
                        </span>
                        @enderror
                    </div>

                    <!-- Description -->
                    <div class="mt-4">
                        <label class="block text-sm font-medium text-gray-700" for="type">
                            Type
                        </label>

                        <input
                            class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 placeholder:text-right focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                            type="text" name="type" placeholder="100" value="{{old('pokemon',$pokemon->type)}}">
                        @error('type')
                        <span class="text-red-600 text-sm">
                            {{ $message }}
                        </span>
                        @enderror
                    </div>


                    <div class="flex items-center justify-start mt-4">
                        <button type="submit"
                            class="inline-flex items-center px-6 py-2 text-sm font-semibold rounded-md text-sky-100 bg-sky-500 hover:bg-sky-700 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300">
                            Update
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
