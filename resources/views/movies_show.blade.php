{{-- <title>{{ $movie->originalTitle}}</title>
<td>Title</td>
<br> --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
@dump($movie)
<td>{{ $movie->primaryTitle }}</td>
<br>
<br>
<a href="/movies/{{ $movie->id }}">
<img src="{{ $movie->poster }}" alt="{{ $movie->primaryTitle }}">
<br>
<br>
<td>{{ $movie->originalTitle }}</td>
<br>
<br>
<td>{{ $movie->plot }}</td>
<br>
<br>
<td>{{ $movie->startYear }}</td>
<br>
<br>
<td>{{ $movie->runtimeMinutes }}</td>
<br>
<br>
<td>{{ $movie->averageRating }}/10</td>
<br>
<br>
<td>{{ $movie->numVotes }}</td>
</html>