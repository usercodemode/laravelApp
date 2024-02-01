<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;


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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/blogs', function () {
    return view('blogs');
});

Route::get('/blog', function () {
    return view('blogs');
});


Route::get('/register', [RegisterController::class, 'create'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);

Route::post('/logout', [LoginController::class, 'logout']);
Route::get('/login', [LoginController::class, 'LoginForm'])->name('login');
Route::post('/authenticate', [LoginController::class, 'authenticate']);

Route::get('/blog/{id}', [PostController::class, 'show']);
Route::post('/post', [PostController::class, 'store']);
