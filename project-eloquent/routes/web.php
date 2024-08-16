<?php


use Illuminate\Support\Facades\Route;
use app\Http\Controllers;
use App\Http\Controllers\UserController;


Route::resource('user', UserController::class);


// Route::get('/home', [UserController::class, 'index']);
