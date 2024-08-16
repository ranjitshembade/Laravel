<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\usercontroller;
use App\Http\Controllers\UserControllers;
use App\Http\Controllers\CommentControllers;


// Route::view('/', '/adduser');
// Route::view('/', '/adduser');

Route::view('/', '/adduser1');

Route::post('/add', [usercontroller::class, 'adduser'])->name('adduser');

Route::post('/add1', [usercontroller::class, 'adduser1'])->name('adduser1');

Route::resource('users', UserControllers::class); //resource controller

// Route::resource('users', UserControllers::class)->only(['create', 'update', 'show']); //resource controller for selected methods

// Route::resource('users', UserControllers::class)
//     ->names([
//         'create' => 'users.build',
//         'show' => 'users.view'
//     ]); //resource controller for rename the methods create to Build


Route::resource('users.comment', CommentControllers::class); //Nested resource controller we can see "users.comment" their is users are parent and comment are child controller
