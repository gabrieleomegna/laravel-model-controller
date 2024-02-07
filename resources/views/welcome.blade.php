
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome blade</title>
    @vite('resources/js/app.js')
</head>
<body>
    <header>
        <h1>Welcome</h1>
    </header>
    <main>
        <div class="container">
        @foreach ($movies as $movie)
            <article>
                <h2>
                    {{$movie->title}} 
                </h2>
                <h4>
                    {{$movie->original_title}} 
                </h4>
                <p>Nationality:{{$movie->nazionality}}</p>
                <p>Date:{{$movie->date}}</p>
                <p>Vote:{{$movie->vote}}</p>
            </article>
        @endforeach
    </div>
</main>
</body>
</html>