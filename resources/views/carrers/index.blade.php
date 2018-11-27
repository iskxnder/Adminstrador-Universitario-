@extends('layouts.dashboard')

@section('content')
<div class="content mt-3">
    <div class="animated fadeIn">
      <div class="row">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header">
                    <strong class="card-title">Carreras</strong>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                      <thead class="thead-dark">
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Nombre</th>
                          <th scope="col">Acción</th>
                        </tr>
                      </thead>
                      <tbody>

                        @foreach ($carrers as $carrer)
                          <tr>
                            <th scope="row">{{ $num++ }}</th>
                            <td>{{ $carrer->name }}</td>
                            <td>
                                <a href="{{ route('carrers.edit', $carrer->id) }}">
                                    <i class="fa fa-pencil"></i>
                                </a>    
                                <a href="#" onclick="destroy('{{ $carrer->id }}');" data-toggle="modal" data-target="#fulminate">
                                    <i class="fa fa-trash-o"></i>
                                </a>
                            </td>
                          </tr>
                        @endforeach
                      </tbody>
                    </table>
                    {!! $carrers->render(); !!}
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            @include('carrers.partials.info')
            @include('carrers.partials.aside')
        </div>
        <script>
            function destroy(e)}{
                document.getElementById("carrerId").value=e;
            }
        </script>
      </div>
    </div>
    
    

</div>

@endsection