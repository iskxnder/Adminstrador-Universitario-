<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Carrer;
use App\Http\Requests\StudentRequest;

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
      $carrers  = Carrer::all()->pluck('name','id');
      return view('students.create', compact('students','carrers'));
    }


    public function store(StudentRequest $request)
    {
      $student = new Student;
      
      $student->name      = $request->name;
      $student->surname   = $request->surname;
      $student->document  = $request->document;
      $student->email     = $request->email;
      $student->carrer_id = $request->carrer_id;
      $student->file      = $request->file;

      $student->save();

      return redirect()->route('students.index')
                       ->with('info', 'El estudiante a sido registrado');
    }


    public function edit($id)
    {
      $student = Student::find($id);
      $carrers  = Carrer::all()->pluck('name','id');
      return view('students.edit', compact('student','carrers'));
    }


    public function update(StudentRequest $request, $id)
    {
      $student = Student::find($id);
      
      $student->name      = $request->name;
      $student->surname   = $request->surname;
      $student->document  = $request->document;
      $student->email     = $request->email;
      $student->carrer_id = $request->carrer_id;
      $student->file      = $request->file;

      $student->save();

      return redirect()->route('students.index')
                       ->with('info', 'El estudiante a sido actualizado');
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
