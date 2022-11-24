@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow p-3 mb-5 bg-body rounded">
                <div class="card-header text-center" style="background-color: #d7e5f3;"><b>{{ __('Matrícula') }}</b></div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <table class="table table-bordered">
                        <tr>
                            <th>Curso</th>
                            <th>Ciclo</th>
                            <th>Creditos</th>
                            <th>Seccion</th>
                        </tr>

                        @foreach ($matricula as $matriculas )
                        <tr>
                            <td>{{$matriculas->asignatura}}</td>
                            <td>{{$matriculas->ciclo}}</td>
                            <td>{{$matriculas->creditos}}</td>
                            <td>{{$matriculas->seccion}}</td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection