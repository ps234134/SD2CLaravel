<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cars</title>
    @vite('resources/css/app.css')
</head>
<body>

    <div class="bg-gradient-to-r from-red-500 to-gray-800 text-white text-5xl">
        <ul class="flex p-4">
            <li class="mr-6 flex-auto">
                Cars
            </li>

        </ul>
    </div>
    <ul class="flex text-3xl mt-4 p-4">
    <li class="mr-6">
            <a class="text-blue-500 hover:text-blue-800" href="{{('/home')}}">Home</a>
        </li>
        

    </ul>
    @yield('content')
</body>
</html>
