<?php

use App\Http\Controllers\StudentController;    
use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [StudentController::class, 'showStudents']);

Route::get('/union', [StudentController::class, 'uniondata']);

Route::get('/when', [StudentController::class, 'whendata']);

Route::get('/chunk', [StudentController::class, 'chunkdata']); 


