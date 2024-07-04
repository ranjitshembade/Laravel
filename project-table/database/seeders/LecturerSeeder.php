<?php

namespace Database\Seeders;

use App\Models\Lecturer; // Add this line
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class lecturerseeder extends Seeder
{
    public function run(): void
    {
        $json = File::get(path: 'database/json/lecturer.json');
        $lecturer = collect(json_decode($json, true));

        // $lecturer->each(function($data){

        foreach (collect($lecturer) as $lecturerData) {
            Lecturer::create([
                'name' => $lecturerData['name'],
                'email' => $lecturerData['email'],
                'age' => $lecturerData['age'],
                'city' => $lecturerData['city']
  

                // 'name'=> $data->name,
                // 'email'=> $data->email,
                // 'age'=> $data->age,
                // 'city'=> $data->city
            ]);
        };
    }
}
