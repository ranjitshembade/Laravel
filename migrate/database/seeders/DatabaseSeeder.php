<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Student;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Student::factory()->count(20)->create();

    //     $this->call([
    //        StudentSeeder::class //for create a data
    //     ]);
    // }
}
}