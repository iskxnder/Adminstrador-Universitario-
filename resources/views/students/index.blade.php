@extends('layouts.dashboard')

@section('content')
<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header">
                <strong class="card-title">Estudiantes</strong>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                      <thead class="thead-dark">
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Nombre</th>
                          <th scope="col">Apellido</th>
                          <th scope="col">Cédula</th>
                          <th scope="col">Carrera</th>
                          <th scope="col" colspan="3">Acción</th>
                        </tr>
                      </thead>
                      <tbody>

                        @foreach ($students as $student)
                          <tr>
                            <th scope="row">{{ $num++ }}</th>
                            <td>{{ $student->name }}</td>
                            <td>{{ $student->surname }}</td>
                            <td>{{ $student->document }}</td>
                            <td>{{ $student->carrers->name }}</td>

                            <!--Botones-->
                            <td>
                                <a href="{{ route('students.show', $student->id) }}" >
                                  <i class="fa fa-eye"></i>
                                </a>
                            </td>
                            <td>
                              <a href="{{ route('students.edit', $student->id) }}" >
                                <i class="fa fa-pencil"></i>
                              </a>
                            </td>
                            <td>
                              <a href="#" onclick="destroy('{{ $student->id }}');" data-toggle="modal" data-target="#deleteStudent">
                                <i class="fa fa-trash-o"></i>
                              </a>
                            </td>
                          </tr>
                        @endforeach

                      </tbody>
                    </table>
                    {!! $students->render(); !!}
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            @include('students.partials.info')
            @include('students.partials.aside-index')
        </div>
        <script>
            function destroy(e)}{
                document.getElementById("studentId").value=e;
            }
        </script>
    </div>
</div>
@endsection