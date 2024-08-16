<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Seed the users table.
     *userstable deeder file make migration accourding to seeder
     
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            ['name' => 'Alice Johnson', 'email' => 'alice.johnson@example.com', 'age' => 25, 'city' => 'New York'],
            ['name' => 'Bob Smith', 'email' => 'bob.smith@example.com', 'age' => 30, 'city' => 'Los Angeles'],
            ['name' => 'Charlie Brown', 'email' => 'charlie.brown@example.com', 'age' => 22, 'city' => 'Chicago'],
            ['name' => 'David Wilson', 'email' => 'david.wilson@example.com', 'age' => 35, 'city' => 'Houston'],
            ['name' => 'Eve Davis', 'email' => 'eve.davis@example.com', 'age' => 28, 'city' => 'Phoenix'],
            ['name' => 'Frank Miller', 'email' => 'frank.miller@example.com', 'age' => 40, 'city' => 'Philadelphia'],
            ['name' => 'Grace Lee', 'email' => 'grace.lee@example.com', 'age' => 27, 'city' => 'San Antonio'],
            ['name' => 'Hank Adams', 'email' => 'hank.adams@example.com', 'age' => 32, 'city' => 'San Diego'],
            ['name' => 'Ivy Thompson', 'email' => 'ivy.thompson@example.com', 'age' => 24, 'city' => 'Dallas'],
            ['name' => 'Jack White', 'email' => 'jack.white@example.com', 'age' => 29, 'city' => 'San Jose'],
        ]);
    }
}
