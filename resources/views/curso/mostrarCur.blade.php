@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow p-3 mb-5 bg-body rounded">
                <div class="card-header text-center" style="background-color: #d7e5f3;">{{ __('Cursos') }}</div>

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
                            <th colspan="3"  class="text-center">Semestral</th>
                        </tr>
                        <tr>
                            <th>Tipo de estudio</th>
                            <th>asignatura</th>
                            <th>Ciclo</th>
                            <th>Creditos</th>
                            <th>HT</th>
                            <th>HP</th>
                            <th>TH</th>
                            <th>HT</th>
                            <th>HP</th>
                            <th>TH</th>
                        </tr>



                        @foreach ($curso as $cursos)
                        <tr>
                            <td>{{$cursos->tipo_de_estudio}}</td>
                            <td>{{$cursos->asignatura}}</td>
                            <td>{{$cursos->ciclo}}</td>
                            <td>{{$cursos->creditos}}</td>
                            <td>{{$cursos->HT_sema}}</td>
                            <td>{{$cursos->HP_sema}}</td>
                            <td>{{$cursos->TH_sema}}</td>
                            <td>{{$cursos->HT_seme}}</td>
                            <td>{{$cursos->HP_seme}}</td>
                            <td>{{$cursos->TH_seme}}</td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection