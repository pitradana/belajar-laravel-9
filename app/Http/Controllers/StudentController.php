<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function show($id)
    {
        $address = Student::find($id)->contact->address;
        return view('example', ['address' => $address]);
    }
}
