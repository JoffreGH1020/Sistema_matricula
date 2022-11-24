@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card shadow p-3 mb-5 bg-body rounded">
                <div class="card-header text-center" style="background-color: #d7e5f3;"><b>{{ __('Programa') }}</b></div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif


                    <table class="table table-bordered">
                    <tr>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th colspan="2" class="text-center">Docente</th>
                        </tr>
                        <tr>
                            <th>Asignatura</th>
                            <th>Codigo</th>
                            <th>Prerequisitos</th>
                            <th>Creditos</th>
                            <th>Carga horaria</th>
                            <th>Ciclo</th>
                            <th>Semestre academico</th>
                            <th>Nombres</th>
                            <th>Apellidos</th>
                        </tr>
                        @foreach ($proga as $progas)
                        <tr>
                            <td>{{$progas->asignatura}}</td>
                            <td>{{$progas->codigo}}</td>
                            <td>{{$progas->prerequisitos}}</td>
                            <td>{{$progas->creditos}}</td>
                            <td>{{$progas->carga_horaria}}</td>
                            <td>{{$progas->ciclo}}</td>
                            <td>{{$progas->semestre_academico}}</td>
                            <td>{{$progas->nombres}}</td>
                            <td>{{$progas->apellidos}}</td>
                        </tr>
                        @endforeach

                    </table>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection