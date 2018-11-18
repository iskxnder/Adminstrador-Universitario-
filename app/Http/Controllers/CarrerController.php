<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Carrer;

class CarrerController extends Controller
{
    public function index()
    {
      $carrers = Carrer::orderBy('id','ASCE')->paginate();
      return view('carrers.index', compact('carrers'));   
    }

    
    public function show($id)
    {
      $carrer = Carrer::find($id);
      return view('carrers.show', compact('carrer'));
    }


    public function create()
    {
      return view('carrers.create');
    }
    
    
    public function edit($id)
    {
      $carrer = Carrer::find($id);
      return view('carrers.edit', compact('carrer'));
    }


    public function destroy($id)
    {
      $carrer = Carrer::find($id);
      $carrer->delete();

      return back()->with('info','Carrera eliminada');
    }
}

    

