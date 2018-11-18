<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Carrer;

class CarrerController extends Controller
{
    public function index()
    {
      $carrers = Carrer::orderBy('id','DESC')->paginate();
      return view('carrers.index', compact('carrers'));   
    }

    
    public function show($id)
    {
      $carrer = Carrer::find($id);
      return view('carrers.show', compact('carrer'));
    }
}

    

