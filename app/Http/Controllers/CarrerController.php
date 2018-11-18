<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Carrer;
use App\Http\Requests\CarrerRequest;

class CarrerController extends Controller
{
    public function index()
    {
      $carrers = Carrer::orderBy('id')->paginate();
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


    public function store(CarrerRequest $request)
    {
      $carrer = new Carrer;

      $carrer->name = $request->name;

      $carrer->save();

      return redirect()->route('carrers.index')
                       ->with('info','Carrera Guardada');
    }
    
    
    public function edit($id)
    {
      $carrer = Carrer::find($id);
      return view('carrers.edit', compact('carrer'));
    }


    public function update(CarrerRequest $request, $id)
    {
      $carrer = Carrer::find($id);

      $carrer->name = $request->name;

      $carrer->save();

      return redirect()->route('carrers.index')
                       ->with('info','Carrera Editada');
    }


    public function destroy($id)
    {
      $carrer = Carrer::find($id);
      $carrer->delete();

      return back()->with('info','Carrera eliminada');
    }
}

    

