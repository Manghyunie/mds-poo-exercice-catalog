<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ config('app.name') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        .container {
            margin: auto;
            max-width: 900px;
        }

        .wrapper {
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
        }
        .grid-container {
  display: grid;
  grid-template-columns: 1fr 1fr 1fr;
  grid-gap: 1em;
}
    </style>
</head>
<body>
    
    <div class="container">
        <h1>{{ config('app.name') }}</h1>
        <div>
<a href="http://127.0.0.1:8000/movies">List is here</a>
        </div>
        <div>
        <a href="">Choose a random film</a>
        </div>
<br>
        <div class="grid-container">
            @foreach ($movies as $movie)
            <div>
                <a href="/movies/{{ $movie->id }}">
                    <img src="{{ $movie->poster }}" alt="{{ $movie->primaryTitle }}">
                </a>
            </div>
            @endforeach
        </div>
    </div>
</body>
</html>
