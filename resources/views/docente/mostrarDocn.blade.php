@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow p-3 mb-5 bg-body rounded">
                <div class="card-header text-center" style="background-color: #d7e5f3;"><b>{{ __('Docentes') }}</b></div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <table class="table table-bordered">
                        <tr>
                            <th>Nombres</th>
                            <th>Apellidos</th>
                            <th>DNI</th>
                            <th>Correo</th>
                            <th>Telefono</th>
                            <th>Codigo</th>
                            <th>Estado</th>
                        </tr>

                        @foreach ($docente as $docentes)
                        <tr>
                            <td>{{$docentes->nombres}}</td>
                            <td>{{$docentes->apellidos}}</td>
                            <td>{{$docentes->DNI}}</td>
                            <td>{{$docentes->correo}}</td>
                            <td>{{$docentes->telefono}}</td>
                            <td>{{$docentes->codigo}}</td>
                            <td>{{$docentes->estado}}</td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection