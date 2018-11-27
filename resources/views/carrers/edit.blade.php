@extends('layouts.dashboard')

@section('content')
<div class="content mt-3">
        <div class="animated fadeIn">
            <div class="row">

              <div class="col-lg-8">
                <div class="card">
                  <div class="card-header">Editar Carrera</div>
                  <div class="card-body card-block">

                    @include('carrers.partials.error')
                    
                    {!! Form::model($carrer, ['route'=> ['carrers.update', $carrer->id], 'method'=> 'PUT']) !!}
                        @include('carrers.partials.form')
                    {!! Form::close() !!}

                  </div>
                </div>
              </div>

              <div class="col-lg-4">
                    @include('carrers.partials.aside')
              </div>

            </div>

        </div>
    </div>
@endsection
