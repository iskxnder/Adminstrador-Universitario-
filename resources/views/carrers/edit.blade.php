@extends('layouts.dashboard')

@section('content')
<div class="content mt-3">
        <div class="animated fadeIn">
            <div class="row">

              <div class="col-lg-9">
                <div class="card">
                  <div class="card-header">Example Form</div>
                  <div class="card-body card-block">
                    
                    {!! Form::model($carrer, ['route'=> ['carrers.update', $carrer->id], 'method'=> 'PUT']) !!}
                        @include('carrers.partials.form')
                    {!! Form::close() !!}

                  </div>
                </div>
              </div>

            </div>

        </div>
    </div>
@endsection
