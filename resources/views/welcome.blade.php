
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome blade</title>
    @vite('resources/js/app.js')
</head>
<body>
    <h1>Welcome</h1>
    <ul>
        @foreach ($movies as $movie)
            <li>
                {{$movie->id}}, {{$movie->title}} 
            </li>
        @endforeach
    </ul>
</body>
</html>