<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index()
    {
        // dd("ranjit");
        $users = User::all();
        // dd($users);

        // $users = $users->paginate(5); // 5 users per page
        // $users = User::find(9);
        // $users = User::count();
        // $users = User::whereId(9)->get();
        // $users = User::whereAge(30)->select('name', 'email as User Email')->get();
        // $users = User::whereAge(30)->select('name', 'email as User Email')->ddRawSql();
        // $users = User::whereNotBetween('age', [20, 30])->get(); // whereNotIn/whereIn('city',['delhi', 'goa']);




        // return $users;

        return view("home", compact('users'));
        // return view("layout");
    }


    public function create()
    {
        return view("adduser");
    }


    public function store(Request $request)
    {
        // $user = new User;
        // $user->name = $request->username;
        // $user->email = $request->useremail;
        // $user->age = $request->userage;
        // $user->city = $request->usercity;
        // $user->save(); //save data in table


        //Validate Data
        $request->validate([
            'username' => 'required',
            'useremail' => 'required|email',
            'userage' => 'required|numeric',
            'usercity' => 'required'
        ]);


        //MassAssignment Method: It's help to add mass data faster than 1st method
        //this function using garded method without using that in model we can't use this
        User::create([
            'name' => $request->username,
            'email' => $request->useremail,
            'age' => $request->userage,
            'city' => $request->usercity
        ]);

        return redirect()->route('user.index')
            ->with('status', 'New User Added Successfully.');
    }


    public function show(string $id)
    {
        $users = User::find($id);
        return view("viewuser", compact('users')); //compact('users') that user is key get reference from $users
    }


    public function edit(User $user)
    {
        $users = User::find($user->id);
        return view("updateuser", compact('users'));
    }


    public function update(Request $request, string $id)
    {
        // $user = User::find($id);
        // $user->name = $request->username;
        // $user->email = $request->useremail;
        // $user->age = $request->userage;
        // $user->city = $request->usercity;
        // $user->save(); //save data in table

        $request->validate([
            'username' => 'required',
            'useremail' => 'required|email',
            'userage' => 'required|numeric',
            'usercity' => 'required'

        ]);

        $user = User::where('id', $id)
            ->update([
                'name' => $request->username,
                'email' => $request->useremail,
                'age' => $request->userage,
                'city' => $request->usercity
            ]);

        return redirect()->route('user.index')
            ->with('status', 'User Updated Successfully.');
    }


    public function destroy(User $user) {}
}
