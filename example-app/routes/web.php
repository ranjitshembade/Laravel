<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoController;

/*

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/demo', function() {
//     echo "Hey" ;
//     });
    

Route::get('/demowelcome', function() {
echo "Welcome php" ;
});

Route::any('/test', function() {
    echo "Here Testing is Going On";
});

Route::get('/demo1', function() {
    return view ('demo') ; //refernce to view demop file show here

    });

    
Route::get('/demo2/{name}/{id?}', function($name, $id=null)  {
    echo $name . " " ;
    echo $id; //when we put Que mark after the parrameter its became a option parrameter
    });

    Route::get('/demo/{name}/{id?}', function($name, $id=null)  {
        $data = compact('name', 'id');
    print_r($data);
        //return view('demo')->with($data);
    });

    */
/*
    Route::get('/{name?}',function($name = null){
        $data = compact('name');
return view('home')->with($data);; //its automatically redirect in view home.blade.php file to show content in that home blade file
    });
*/

//for calling loops 
//Route::get('/loops', function(){
//      return view('loops');
//}); 

Route::get('/',[DemoController::class, 'index']);



 