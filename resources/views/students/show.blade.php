@extends('layouts.dashboard')

@section('content')
<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header">
                    <strong class="card-title">Estudiante</strong>
                </div>
                
                <div class="card-body">
                    <div class="col-lg-12 col-md-6">
                        <aside class="profile-nav alt">
                            <section class="card">
                                <div class="card-header user-header alt bg-dark">
                                    <div class="media">
                                        <a href="#">
                                            <img class="align-self-center rounded-circle mr-3" style="width:85px; height:85px;" alt="" src="{{ asset('admin/images/admin.jpg') }}">
                                        </a>
                                        <div class="media-body">
                                            <h3 class="text-light display-6">{{ $student->name }} {{ $student->surname }}</h3>
                                            <p><td>Cédula: {{ $student->document }}</td></p>
                                        </div>
                                    </div>
                                </div>
        
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">
                                        <a href="#"> <i class="fa fa-book"></i> Carrera: {{ $student->carrers->name }} </a>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="#"> <i class="fa fa-envelope"></i> Correo: {{ $student->email }} </a>
                                    </li>
                                </ul>
        
                            </section>
                        </aside>
                    </div>
                </div>

            </div>
        </div>
        <div class="col-lg-4">
                @include('students.partials.aside-show')
        </div>
    </div>
</div>
@endsection