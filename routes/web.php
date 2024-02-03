<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use Illuminate\Routing\Events\RouteMatched;

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


Route::get('/', function () {
    return view('index');
});

// Register 

Route::get('/register', function () {
    return view('register');
});

Route::get('/register', [RegisterController::class, 'create'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);

// Dashboard
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware("auth");


// Login

Route::get('/login', [LoginController::class, 'LoginForm'])->name('login');
Route::post('/authenticate', [LoginController::class, 'authenticate']);

// Logout

Route::post('/logout', [LoginController::class, 'logout']);

// New Blog Form
Route::get('/blogs', function () {
    return view('blogs');
})->middleware("auth");

// Show Single Post
Route::get('/blog/{id}', [PostController::class, 'show'])->middleware("auth");

// Post Blog
Route::get('/post', function () {
    return view('blogs');
})->middleware("auth");


Route::post('/post', [PostController::class, 'store'])->middleware("auth");

// Get user Post(s)
Route::get('/posts', [PostController::class, 'userPosts'])->middleware("auth");

// Edit Blog
Route::get('/edit/{id}', [PostController::class, 'edit'])->middleware("auth");
Route::put('/update/{id}', [PostController::class, 'update'])->middleware("auth");

// Delete
Route::delete('/delete/{id}', [PostController::class, 'destroy'])->middleware("auth");