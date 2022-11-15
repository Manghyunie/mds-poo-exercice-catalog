<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<style>
    .container {
        margin: auto;
        max-width: 900px;
    }
    .cat {
        height: 200px;
        width: 200px;
        line-height: 200px;
    }
    img {
        max-width: 40%;
        max-height: 40%;
    }

    .centre {
        text-align : center;
    }

    .grid-container {
  display: grid;
  grid-template-columns: 1fr 1fr 1fr;
  grid-gap: 1em;
  line-height: 200px;
}

</style>

{{-- @dump($movies_paginator) --}}
@foreach ($movies_paginator as $movie)
            <div class="grid-container">
                <li class="list-group-item list-group-item-primary">
                <a class="list-group-item" href="/movies/{{ $movie->id }}">
                    <img src="{{ $movie->poster }}" alt="{{ $movie->primaryTitle }}" weigh="10px">
                </a>
                <li text-align: "."> {{$movie->averageRating }} </li>
                {{ $movie->originalTitle }}
                </li>
            </div>
            @endforeach
{{-- <td>{{ $movies_paginator->originalTitle }}</td> --}}
{{-- <a href="/movies/{{$movies_paginator->id}}"> --}}
    <div>
        {{ $movies_paginator->links('paginator') }}
    </div>
    </html>