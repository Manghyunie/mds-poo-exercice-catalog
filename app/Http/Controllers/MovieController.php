<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Contracts\Database\Query\Builder;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

class MovieController extends Controller
{
    public function list(Request $request) {
        
        $order_by = $request->query('order_by');
        $order = $request->query('order', 'asc');
        // dump($request);
        $query = Movie::query();
        if ($order_by != Null) {
            $query->orderBy($order_by, $order);
        }

        // $orderdate = Movie::where('id')->orderBy('releaseDate', 'asc')->get();
        // /movies?order_by=releaseDate&order=asc


        // if ($genre != null) {
        //     $query->whereHas('genres', function (Builder $q) use ($genre) {
        //     $q->where('id', $genre);
        // });
    // }

        //Paginator::all();
        $movies_paginator = Movie::paginate(20);
        //$movies = Movie::limite(20)->get;
        return view('movies_list', ['movies_paginator' => $movies_paginator]);
    }

    public function show($id)
    {
        $movie = Movie::where('id', $id)->first();

        //dd($movie->$genres);
        return view('movies_show', ['movie' => $movie]);
    }

    
    // public function random() {
    //     $movie = Movie::inRandomOrder()->first();
    //     $movie_id = movie_id;
    //     return redirect ;
    // }
}
