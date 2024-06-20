<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/2', function () {
//     return view('second');
// });

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');;

Route::get('/userlogin', function () {
    return view('signup.userlogin');
})->name('signup');;

Route::post('/user/login', [UserController::class, 'login'])->name('login');


Route::get('/adminlogin', function () {
    return view('signup.adminlogin');
})->name('signupadmin');;

Route::post('/admin/login', [AdminController::class, 'login'])->name('login');


// // Define routes for user registration
// Route::post('/user/register', [UserController::class, 'register'])->name('user.register');

// Route::get('/user/logout', [UserController::class, 'logout'])->name('user.logout');
// Route::get('/user/profile', [UserController::class, 'profile'])->name('user.profile');


