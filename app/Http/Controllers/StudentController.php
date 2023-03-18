<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\Activity;

class StudentController extends Controller
{
    public function show($id)
    {
        // $students = Teacher::find($id)->students;
        // return view('example', ['students' => $students]);

        // $activity = Activity::find($id);
        // $students = $activity->students;
        // return view('example', ['activity' => $activity,'students' => $students]);

        $student = Student::find($id);
        $activities = $student->activities;
        return view('example', ['activities' => $activities, 'student' => $student]);
    }
}
