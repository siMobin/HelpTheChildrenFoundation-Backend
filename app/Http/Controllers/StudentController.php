<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function getAllStudents()
    {
        // select selective columns
        $students = Student::select(
            'id',
            'photo_path',
            'name',
            'gender',
            'class',
            'roll',
            'campus',
        )
            ->where('sponsor_no', null)
            ->get();
        return \response()->json($students);
    }
}
