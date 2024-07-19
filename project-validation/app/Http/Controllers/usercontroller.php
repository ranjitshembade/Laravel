<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;
// use App\Rules\Uppercase;
// use App\Rules\Lowercase;

use Illuminate\support\Facades\Validator;
use Closure;

class usercontroller extends Controller
{
    // public function adduser(Request $req){    //we directily take userrequest class for manage a code


    // $req->validate([
    //     'username' => 'required',
    //     'useremail' => 'required | email',
    //     'userage' => 'required | numeric | min:18 | max:60 | between:18,60',
    //     'usercity' => 'required',
    //     'userpass' => 'required | alpha_num | min:6'
    // ], [
    //     "username.required" => 'You Should Enter Name!',
    //     "useremail.required" => 'You Should Enter User mail ID!',
    //     "userage.min:18 " => 'Are age batane main kahe ki sharam!',
    //     "usercity.required" => 'Munna Chup Chap Address Dal chal!',
    //     "userpass.required" => 'You Should Enter User Password!'
    // ]);


    // [
    //     "username.required" => "aap hai kon"
    // ]);

    public function adduser(UserRequest $req)
    {


        return $req->all(); //show all data

        // return $req->only(['username', 'usercity']); //show only selected data

        // return $req->except(['username', 'usercity']); //hide selected data and show remaining all
    }

    public function adduser1(Request $req)
    {

        // $validate = $req->validate([
        //     'username' => ['required', new Uppercase],
        //     'useremail' => 'required | email'
        // ]);



        $validate = $req->validate([
            'username' => ['required', function (string $attribute, mixed $value, closure $fail) {
                if (strtoupper($value) !== $value) {
                    $fail('The :attribute must be uppercase');
                }
            }],
            'useremail' => 'required | email'
        ]);

        // dd($validate);

        // echo $validate['username'];

        return $req->all(); //show all data
    }
}
