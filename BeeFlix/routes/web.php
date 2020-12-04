<?php

use App\Http\Controllers\MovieController;
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

Route::get('/home', 'MovieController@showMovie');
Route::get('/movie_details/{id}', 'MovieController@showMovieDetails');
Route::get('/all_film/{genre_id}', 'MovieController@showMovieInSpecificCategory');