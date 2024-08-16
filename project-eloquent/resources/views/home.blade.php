@extends('layout')

@section('title')
    All User Data
@endsection

@section('content')
<a href="{{route('user.create')}}" class="btn btn-success btn-sm-4 mb-3">Add New</a>
<div class="row">
   <table class="table table-striped table-boardered-red ">
       <tr>
           <th> ID </th>
           <th> NAME </th>
           <th> EMAIL </th>
           <th> AGE </th>
           <th> CITY </th>
           <th> VIEW </th>
           <th> DELETE </th>
           <th> UPDATE </th>
      @foreach($users as $user)
       {{-- @dd($users) --}}
       <tr>
           <td> {{ $user->id }}</td>
           <td> {{ $user->name }}</td>
           <td> {{ $user->email }}</td>
           <td> {{ $user->age }}</td>
           <td> {{ $user->city }}</td>
           <td><a href="{{route('user.show' ,  $user->id)}}" class="btn btn-primary btn-sm-4 mb-3">View</a></td>
           <td><a href="" class="btn btn-danger btn-sm-4 mb-3">Delete</a></td>
           <td><a href="{{route('user.edit',  $user->id)}}" class="btn btn-warning btn-sm-4 mb-3">Update</a></td>
       </tr>
       @endforeach
   </table>
@endsection