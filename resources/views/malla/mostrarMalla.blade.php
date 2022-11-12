@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card shadow p-3 mb-5 bg-body rounded">
                <div class="card-header text-center" style="background-color: #d7e5f3;">{{ __('Malla') }}</div>

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
                            <th colspan="3" class="text-center">Semanal</th>
                            <th colspan="3" class="text-center">Semestral</th>
                        </tr>
                        <tr>
                            <th>Ciclo</th>
                            <th>Codigo</th>
                            <th>Tipo de estudio</th>
                            <th>Asignatura</th>
                            <th>HT</th>
                            <th>HP</th>
                            <th>TH</th>
                            <th>HT</th>
                            <th>HP</th>
                            <th>TH</th>
                            <th>Creditos</th>
                            <th>Prerequisitos</th>
                        </tr>

                        @foreach ($malla as $mallas)
                        <tr>
                            <td>{{$mallas->ciclo}}</td>
                            <td>{{$mallas->codigo}}</td>
                            <td>{{$mallas->tipo_de_estudio}}</td>
                            <td>{{$mallas->asignatura}}</td>
                            <td>{{$mallas->HT_sema}}</td>
                            <td>{{$mallas->HP_sema}}</td>
                            <td>{{$mallas->TH_sema}}</td>
                            <td>{{$mallas->HT_seme}}</td>
                            <td>{{$mallas->HP_seme}}</td>
                            <td>{{$mallas->TH_seme}}</td>
                            <td>{{$mallas->creditos}}</td>
                            <td>{{$mallas->prerequisitos}}</td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection