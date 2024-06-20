<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TestingController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});


Route::get('/post', function () {
    return view('post');
});

Route::get('/test1', function () {
    return view('test');
});

// sending data route to view 
Route::get('/users', function () {
    return view('users',['user' => "Ranjit"]);
});

Route::get('/user', [UserController::class, 'showHome'])->name('home');

Route::get('/blog', [UserController::class, 'showBlog'])->name('blog');

Route::get('/user/{id}', [UserController::class, 'showUser'])->name('user');


Route::get('/test',TestingController::class);