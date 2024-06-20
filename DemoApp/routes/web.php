<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('ghar');


//Route::view('FirstPage','/post');

// Route::get('/post/FirstPost', function () {
//     return view('FirstPost');
//     });  

Route::get('pageadmin/contact', function () {
    return view('contact');
})->name('ok');

Route::get('/test', function () {
    return view('about');
});

Route::redirect('/about', '/test');  //when you put about in url section then its automatically redirect you on tset url

Route::fallback (function(){ //In this function we redirect laravel official 404 error page to our self created error page or show message
    return "<h1> PAGE NOT FOUND THANK YOU </h1>";
    });
    