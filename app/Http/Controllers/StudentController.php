<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function show($id)
    {
        $student = Student::findOrFail($id);

        $data = '<h1 style="color: red">Name: ' . $student->name . '</h1>'
            . '<br/>Email: ' . $student->email 
            . '<br/>Student Code: ' . $student->student_code ;

        return $data;
    }

    public function searchByName(Request $request)
    {
        $students = Student::where('name', 'like', '%' . $request->value . '%')->get();

        return response()->json($students); 
    }

    public function searchByEmail(Request $request)
    {
        $students = Student::where('email', 'like', '%' . $request->value . '%')->get();

        return response()->json($students); 
    }

}