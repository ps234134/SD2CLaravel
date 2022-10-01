<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>titels</title>
    <style>
        .container {
            display: grid;
            grid-template-columns: 1fr 1fr
        }
    </style>
</head>
<body>
    <div class="container">
    @foreach($data as $title)
        <diV>{{ $title->title }}</div><div>{{ $title->type }}</div>
    @endforeach    
    </div>
</body>
</html>
