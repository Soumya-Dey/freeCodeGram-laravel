<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PostLikeController;
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
// home routes
Route::get('/', function () {
    return view('home');
})->name("home");

// register routes
Route::get('/register', [RegisterController::class, "index"])->name("register");
Route::post('/register', [RegisterController::class, "store"]);

// login routes
Route::get('/login', [LoginController::class, "index"])->name("login");
Route::post('/login', [LoginController::class, "store"]);

// logout routes
Route::post('/logout', [LogoutController::class, "store"])->name("logout");

// dashboard routes
Route::get('/dashboard', [DashboardController::class, "index"])->name("dashboard");

// posts routes
Route::get('/posts', [PostController::class, "index"])->name("posts");
Route::post('/posts', [PostController::class, "store"]);
Route::delete('/posts/{post}', [PostController::class, "destroy"])->name("posts.delete");

// posts likes routes
Route::post('/posts/{post}/likes', [PostLikeController::class, "store"])->name("posts.likes");
Route::delete('/posts/{post}/likes', [PostLikeController::class, "destroy"])->name("posts.likes");
