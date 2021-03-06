@extends('layouts.dashboard')

@section('content')
<div class="content mt-3">
        <div class="animated fadeIn">
            <div class="row">

              <div class="col-lg-8">
                <div class="card">
                  <div class="card-header">Editar Estudiante</div>
                  <div class="card-body card-block">

                    @include('students.partials.error')
                    
                    {!! Form::model($student, ['route'=> ['students.update', $student->id], 'method'=> 'PUT', 'files' => true ]) !!}
                        @include('students.partials.form') 
                    {!! Form::close() !!}

                  </div>
                </div>
              </div>

              <div class="col-lg-4">
                    @include('students.partials.aside-index')
              </div>

            </div>

        </div>
    </div>
@endsection
