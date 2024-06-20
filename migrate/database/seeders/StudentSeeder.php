<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\student;

class StudentSeeder extends Seeder
{
   
    public function run(): void
    {
        $students = collect(
        [
            [
                'name' => 'Ranjit',
               'mobile_no' => '9930569888',
            ],
            [  
                'name' => 'Suraj',
               'mobile_no' => '9930562241',
            ],
            [
                // 'id' => '123',
                'name' => 'Akash',
               'mobile_no' => '9938562245',
            ]
            ]);

            $students->each(function($student){
                student::insert($student);

            });



    //     student::create([
    //       'id' => '123',
    //         'name' => 'Ranjit',
    //         'mobile_no' => '9930562241',
    //         // 'email' => 'John',
    //         // 'percentage' => '63',
    //         // 'city' => 'mumbai',
    //         // 'age' => '12',
    //        ]);
    }
}
