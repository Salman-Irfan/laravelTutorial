<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    // inner join
    public function showStudents(){
        $libraries = DB::table('libraries')
            ->join('students', 'libraries.stu_id', '=', 'students.id')
            ->select('students.name', 'libraries.book', 'libraries.due_date')
            ->orderBy('students.name') // Order by the student's name
            ->get();
        return $libraries;
    }
    // left join
    public function leftJoinStudentsWithLibraries()
    {
        $leftJoinResult = DB::table('students')
            ->leftJoin('libraries', 'students.id', '=', 'libraries.stu_id')
            ->select('students.name', 'libraries.book', 'libraries.due_date')
            ->get();

        return $leftJoinResult;
    }
    // right join
    public function rightJoinStudentsWithLibraries()
    {
        $rightJoinResult = DB::table('students')
            ->rightJoin('libraries', 'students.id', '=', 'libraries.stu_id')
            ->select('students.name', 'libraries.book', 'libraries.due_date')
            ->get();

        return $rightJoinResult;
    }
    // cross join
    public function crossJoinStudentsWithLibraries()
    {
        $crossJoinResult = DB::table('students')
            ->crossJoin('libraries')
            ->select('students.name', 'libraries.book', 'libraries.due_date')
            ->get();

        return $crossJoinResult;
    }
}
