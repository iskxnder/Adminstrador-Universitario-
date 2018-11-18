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
                          <th scope="col" colspan="2">Acción</th>
                        </tr>
                      </thead>
                      <tbody>

                        @foreach ($carrers as $carrer)
                          <tr>
                            <th scope="row">{{ $carrer->id }}</th>
                            <td>{{ $carrer->name }}</td>
                            <td><a href="{{ route('carrers.edit', $carrer->id) }}" class="btn btn-primary">editar</a></td>

                            <td>
                              <form action="{{ route('carrers.destroy', $carrer->id) }}" method="POST">
                                {{ csrf_field() }}
                                <input type="hidden" name="_method" value="DELETE">
                                <button class="btn btn-primary">borrar</button>
                              </form>
                            </td>
                          </tr>
                        @endforeach

                      </tbody>
                    </table>
                    {!! $carrers->render() !!}
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            @include('carrers.partials.info')
            @include('carrers.partials.aside')
        </div>

    </div>
</div>
@endsection