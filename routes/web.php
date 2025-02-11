<?php

use App\Http\Controllers\MovieController;
use App\Models\Movie;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $movies = Movie::inRandomOrder()->whereNotNull('poster')->limit(12)->get();

    return view('home', ['movies' => $movies]);

    // $genre = Genre::first();
    // dd($genre->movies);
    // dd($genre->movies()->paginate(10));
    // dd($genre->movies()->whereNotNull('poster')->get());
});

Route::get('genres', [GenreController::class, 'list']);
Route::get('movies', function (Request $request){
//dd($request);
});

Route::get('/movies', [MovieController::class, 'list']);
Route::get('/movies/{id}', [MovieController::class, 'show']);