<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserControllers extends Controller
{
    public function index()
    {
        echo "All User Page";
    }
    public function create()
    {
        echo "Add New User Page";
    }

    public function store(Request $request)
    {
    }
    public function show(string $id)
    {

        echo "<h1> Details of Users : $id </h1>";
    }

    public function edit(string $id)
    {
        echo "Edit Page";
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
