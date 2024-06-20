<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use app\Models\student;

use function Laravel\Prompts\alert;

class UserController extends Controller
{
  public function showUsers()
  {
    $users = DB::table('students')
      // ->get();// we can get here paginate 
      // ->orderBy('name')
      ->simplePaginate(4);
      //->Paginate(4);

    // dump ($users); //view on front end make simple and attractive to view

    return view('allusers', ['data' => $users]);
  }


  public function singleUsers($id)
  {
    // dd($id);
    $user = DB::table('students')
      ->where('id', $id)
      ->get();
    // dd($user);
    return view('user', ['data' => $user]);

    //foreach ($users as $user) {
    //echo $user->name."<br>";


  }

  public function addUser(Request $req)
  {
    $user = DB::table('students')
      ->insert([
        'name' => $req->username,
        'mobile_no' => $req->usermobileno,
        'address' => $req->useraddress
      ]);
    if ($user) {
      return redirect()->route('home')->with('success', 'Profile Added successfully!');
    } else {
      return redirect()->route('home')->with('error', 'Failed to add profile. Please try again.');    // Redirect with an error message if update fails
    }



    /*add static value
  public function addUser()
  {
    $user = DB::table('students')
      ->insertOrIgnore([
        'name' => 'Satish Kumar',
        'mobile_no' => 'satish@gmail.com',
        'address' => 'home Towen Tuza Kaam Kar, MahaBarabode, Bharat'
      ]); */
    if ($user) {
      echo ("<h1> Data Has succesfully Added </h1>");
    } else {
      echo ("<h1> Operation Fail </h1>");
    }
  }

  /*
  public function updateUser()
  {
    $user = DB::table('students')
      ->where('id', 5)
      ->update([
        'name' => 'Mohan Ranga',
        'mobile_no' => '7028522839',
        'address' => 'India 4010209'
      ]);
    // if ($user) {
    //   echo ("<h1> Data Hasbeen Updated </h1>");
    // } else {
    //   echo ("<h1> Operation Fail </h1>");
    // }
  }
*/

  // NEED TO CORRECT
  public function updateUser(Request $req, $id)
  {
    $user = DB::table('students')
      ->where('id', $id)
      ->update([
        'name' => $req->username,
        'mobile_no' => $req->usermobileno,
        'address' => $req->useraddress
      ]);
    if ($user) {
      return redirect()->route('home')->with('success', 'Profile updated successfully!');
    } else {
      return redirect()->route('home')->with('error', 'Failed to update profile. Please try again.');    // Redirect with an error message if update fails
    }
  }

  public function updatePage(string $id)
  {
    // $user = DB::table('students')->where('id', $id)->get(); 
    $user = DB::table('students')->find($id); //Both methods work same
    return view('updateuser', ['data' => $user]);
    // if($user){
    //   return redirect()->route('home') /*->with('alert', 'Added!')*/ ;
    // }
  }




  // public function deleteUser(){
  // $user = DB::table('students')
  //   ->where('id', 20)
  //   ->delete();
  //   {
  //     echo ("<h1> Data Hasbeen deleted </h1>");

  public function deleteUser(string $id)
  {
    $user = DB::table('students')
      ->where('id', $id)
      ->delete();
    // {
    if ($user) {
      return redirect()->route('home');
    }
    // }
    //     {
    //       alert ("<h1> Selected Data Hasbeen Deleted </h1>");
    // }
  }

  public function deleteAllUser()
  {
    $user = DB::table('students')
      // public function deleteAllUser(string $id){
      //   $user = DB::table('students')
      // ->delete(); //Its delete all data but not reset id table
      ->truncate(); //it's delete all data and also reset id table
    return redirect()->route('home');
  }

  public function store(Request $request)
  {
    // Validate and process the request...

    // Assuming everything goes well, flash a success message
    return redirect()->route('home')->with('success', 'Your data has been saved successfully!');
  }
}
