<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use App\Models\Student; // Import the Student model

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Construct the path to the JSON file
        $json = File::get(database_path('data/students.json'));

        // Decode the JSON data into an array
        $students = json_decode($json, true);

        // Insert each student into the database
        foreach ($students as $student) {
            Student::create([
                'name' => $student['name'],
                'email' => $student['email'],
                'age' => $student['age'],
                'city' => $student['city'],
            ]);
        }
    }
}
