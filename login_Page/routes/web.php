<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AdminLoginController;
use App\Http\Controllers\Auth\UserLoginController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('admin/login', [AdminLoginController::class, 'showLoginForm'])->name('admin.login');
Route::post('login', [AdminLoginController::class, 'login'])->name('login');
Route::get('user/login', [UserLoginController::class, 'showLoginForm'])->name('user.login');
Route::post('user/login', [UserLoginController::class, 'login']);
