<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\Movie;
use Illuminate\Contracts\Database\Query\Builder;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

class MovieController extends Controller
{
    public function list($genre) {
        
        // dump($request);

        // $orderdate = Movie::where('id')->orderBy('releaseDate', 'asc')->get();
        // /movies?order_by=releaseDate&order=asc


        // if ($genre != null) {
        //     $query->whereHas('genres', function (Builder $q) use ($genre) {
        //     $q->where('id', $genre);
        // });
    // }

        //Paginator::all();
        $movies_genre = Movie::paginate(20);
        //$movies = Movie::limite(20)->get;
        return view('movies_list', ['movies_genre' => $movies_genre]);
    }
}