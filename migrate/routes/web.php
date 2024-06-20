<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


Route::controller(UserController::class)->group(function () {
    //Use GroupBy method to reduce the number of code



    Route::get('/', 'showUsers')->name('home');

    Route::any('/user/{id}', 'singleUsers')->name('view.user');

    Route::post('/add', 'addUser')->name('addUser');

    Route::put('/update/{id}', 'updateUser')->name('update.user');

    Route::get('/updatepage/{id}', 'updatePage')->name('update.page');




    // Route::get('/delete', [UserController::class, 'deleteUser']); // dalete only pass value

    // Route::get('/delete/{id}', [UserController::class, 'deleteUser']); //delete only pass value in search bar


    Route::get('/delete/{id}', 'deleteUser')->name('delete.user');

    Route::get('/deleteall', 'deleteAllUser');
});



Route::view('newuser', '/adduser');
