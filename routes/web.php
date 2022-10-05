<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RouteManager;
use App\Http\Controllers\MoviesController;

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

Route::get('/', [MoviesController::class, 'movies'])->name('movies');
Route::get('/movies/movie-{id}}', [MoviesController::class, 'movie'])->name('movie');
Route::get('/about-us', [RouteManager::class, 'about_us'])->name('about-us');
Route::get('/home', [RouteManager::class, 'home'])->name('home');
