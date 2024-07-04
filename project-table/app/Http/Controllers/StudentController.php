<?php

namespace App\Http\Controllers;

use App\Models\Students;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Query\JoinClause;

class StudentController extends Controller
{

    public function showStudents()
    {
        // $students = DB::table('students')
        //     ->leftJoin('cities', 'students.city', '=', 'cities.id')
        //     // ->select('students.*', 'cities.city_name')
        //     // ->join('cities', 'students.city', '=', 'cities.id')
        //     // ->select(DB::raw('count(*)as student_count'), 'cities.city_name')
        //     // ->groupBy('city_name')
        //     // ->having('cities.city_name', '=', 'Mumbai')
        //     ->get();

        $students = DB::table('students')
            ->leftJoin('cities', function (JoinClause $join) {
                $join->on('students.city', '=', 'cities.id')
                    ->where('students.name', 'like', 'a%');
            })
            ->select('students.*', 'cities.city_name')
            ->get();
        // return  $students;
        return view('welcome', compact('students'));
    }
    public function uniondata()
    {
        $lecturers = DB::table('lecturers')
            ->select('name', 'email', 'city_name')
            ->join('cities', 'lecturers.city', '=', 'cities.id');

        $students = DB::table('students')
            ->select('name', 'email', 'city_name')
            ->join('cities', 'students.city', '=', 'cities.id')
            ->union($lecturers)
            // ->toSql(); // to see sql command & how they work
            ->get();

        return $students;
    }

    public function whendata()
    {
        $students = DB::table('students')
            ->when(true, function ($query) {
                $query->where('age', '>', 20);
            })
            ->get();

        return $students;
    }


    public function chunkdata()
    {
        $students = DB::table('students')
            ->orderBy('id')
            ->chunk(3, function ($students) {
                echo "<div style='border: 1px solid red; margin-bottom: 15px;'>";
                foreach ($students as $student) {
                    echo $student->name . "<br>";
                }
                echo "</div>";
            });

        // return $students;
    }
}
