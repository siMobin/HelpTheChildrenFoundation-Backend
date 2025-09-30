<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function getAllStudents()
    {
        $students = Student::all();
        return \response()->json($students);
    }
}
