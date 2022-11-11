@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow p-3 mb-5 bg-body rounded">
                <div class="card-header text-center" style="background-color: #d7e5f3;">{{ __('Programa') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif


                    <table class="table table-bordered">
                        <tr>
                            <th>Malla ID</th>
                            <th>Cursos ID</th>
                            <th>Docente ID</th>
                            <th>Carga horaria</th>
                            <th>Semestre academico</th>
                        </tr>
                        @foreach ($proga as $progas)
                        <tr>
                            <td>{{$progas->malla_id}}</td>
                            <td>{{$progas->cursos_id}}</td>
                            <td>{{$progas->docente_id}}</td>
                            <td>{{$progas->carga_horaria}}</td>
                            <td>{{$progas->semestre_academico}}</td>
                        </tr>
                        @endforeach

                    </table>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection