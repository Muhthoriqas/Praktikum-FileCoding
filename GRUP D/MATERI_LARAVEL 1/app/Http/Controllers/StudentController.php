<?php

namespace App\Http\Controllers;

use App\Models\Student;

class StudentController extends Controller
{
    public function show()
    {
        $student = Student::all();
        return view('siswa', ["studentList" => $student]);
    }
}