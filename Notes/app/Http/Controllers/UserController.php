<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function showUser(string $id){
    return view('user',['id'=>$id]);
}

    public function showBlog(){
        return view('blog');
    }

    public function showHome(){
    return "<h1> User Controller has been Created </h1>" ;
}
}
