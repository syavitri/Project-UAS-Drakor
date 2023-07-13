<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Landingpage\LandingController;
use App\Http\Controllers\Landingpage\MoviesController as Movies;
use App\Http\Controllers\Landingpage\ReviewsController as Reviews;
use App\Http\Controllers\Administrator\GenresController;
use App\Http\Controllers\Administrator\CountriesController;
use App\Http\Controllers\Administrator\DashboardController;
use App\Http\Controllers\Administrator\UsersController;
use App\Http\Controllers\Administrator\MoviesController;
use App\Http\Controllers\Administrator\ReviewsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::prefix('/administrator')->group(function () {
    Route::resource('/', DashboardController::class);
    Route::resource('countries', CountriesController::class);
    Route::resource('genres', GenresController::class);
    Route::resource('movies', MoviesController::class);
    Route::resource('reviews', ReviewsController::class);
    Route::resource('users', UsersController::class);
});

Route::resource('/', LandingController::class);
Route::resource('movies', Movies::class);
Route::resource('reviews', Reviews::class);
