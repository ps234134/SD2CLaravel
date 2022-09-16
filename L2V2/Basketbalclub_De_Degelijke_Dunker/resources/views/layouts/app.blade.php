<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Basketbal</title>
    @vite('resources/css/app.css')
</head>
<body>

    <div class="bg-gradient-to-r from-red-500 to-gray-800 text-white text-5xl">
        <ul class="flex p-4">
            <li class="mr-6 flex-auto">
                Basketbalclub De Degelijke Dunker
            </li>
            <li class="mr-6 flex-auto">
                <a class="text-white-800 hover:text-gray-400" href="#">Lid worden</a>
            </li>
        </ul>
    </div>
    <ul class="flex text-3xl mt-4 p-4">
    <li class="mr-6">
            <a class="text-blue-500 hover:text-blue-800" href="{{('/home')}}">Home</a>
        </li>
        <li class="mr-6">
            <a class="text-blue-500 hover:text-blue-800" href="#">Info</a>
        </li>
        <li class="mr-6">
            <a class="text-blue-500 hover:text-blue-800" href="{{ route('teams') }}">Teams</a>
        </li>
        <li class="mr-6">
            <a class="text-gray-500 cursor-not-allowed" href="#">Jeugd</a>
        </li>
        <li class="mr-6">
            <a class="text-blue-400 hover:text-blue-800" href="#">Nieuws en Media</a>
        </li>
        <li class="mr-6 flex-auto">
            <a class="text-blue-500 hover:text-blue-800" href="#">Contact</a>
        </li>
    </ul>
    @yield('content')
</body>
</html>
