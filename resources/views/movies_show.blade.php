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
<style>
    .cat {
        margin-left: 20px;
        margin-right: 20px;
        padding: 0;
    }
</style>
<br>
<div align="center">
    <div align="center">
<td>{{ $movie->primaryTitle }}</td>
    </div>
<br>
<br>
<img src="{{ $movie->poster }}" alt="{{ $movie->primaryTitle }}">
<br>
<br>
<td>{{ $movie->originalTitle }}</td>
<br>
<br>
<td class="cat">Résumé : {{ $movie->plot }}</td>
<br>
<br>
<td>Date : {{ $movie->startYear }}</td>
<br>
<br>
<td>Temps : {{ $movie->runtimeMinutes }} min</td>
<br>
<br>
<td>Note : {{ $movie->averageRating }}/10</td>
<br>
<br>
<td>Avis : {{ $movie->numVotes }}</td>
</div>
</html>