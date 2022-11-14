<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

class MovieController extends Controller
{
    public function list(Request $request) {
        
        $order_by = $request->query('order_by');
        $order = $request->query('order', 'asc');
        //dd($request);
        // $query = Movie::query();
        // if ($order_by != Null) {
        //     $query->orderBy($order_by, $order);
        // }
        //Paginator::all();
        $movies_paginator = Movie::paginate(20);
        //$movies = Movie::limite(20)->get;
        return view('movies_list', ['movies_paginator' => $movies_paginator]);
    }
    public function show($id)
    {
        $movie = Movie::where('id', $id)->first();
        return view('movies_show', ['movie' => $movie]);
    }
}
