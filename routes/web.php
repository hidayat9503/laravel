<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Models\Categories;

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
    return view('home', [
        'title' => 'Home'
    ]);
});

Route::get('/about', function () {
    return view('about', [
        'title' => 'About',
        'name' => 'Taufik Hidayat',
        'email' => 'taufikhidayat9503@gmail.com',
        'image' => 'avatar.png'
    ]);
});

// route Posts
Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/{post:slug}', [PostController::class, 'show']);

Route::get('/categories', function () {
    return view('categories', [
        'title' => 'Post Categories',
        'categories' => Categories::all()
    ]);
});

Route::get('/categories/{categories:slug}', function (Categories $categories) {
    return view('category', [
        'title' => $categories->name,
        'posts' => $categories->posts,
        'category' => $categories->name
    ]);
});
