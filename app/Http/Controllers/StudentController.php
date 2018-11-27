<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Http\Requests\StudentsRequest;

class StudentController extends Controller
{
    public function index()
    {
      $students = Student::orderBy('id')->paginate();
      $num      = 1;
      return view('students.index', compact('students','num'));   
    }


    public function create()
    {
      return view('students.create', compact('students'));
    }


    public function edit($id)
    {
      $student = Student::find($id);
      return view('students.edit', compact('student'));
    }
    
    
    public function show($id)
    {
      $student = Student::find($id);
      return view('students.show', compact('student'));
    }

    
    public function destroy($id, Request $request)
    {
    
      $id_destroy = $request->student; 
      $student    = Student::find($id_destroy);
      $student->delete();

      return back()->with('info','Estudiante eliminado');
    }
}
