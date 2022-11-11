@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow p-3 mb-5 bg-body rounded">
                <div class="card-header text-center" style="background-color: #d7e5f3;">{{ __('Registro de programa academico') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <form action="/guardar/programas" method="post">
                        @csrf
                        <input class="form-control" type="text" name="malla_id" placeholder="Ingrese ID de la malla" value="{{ old("malla_id") }}"><br>
                        <input class="form-control" type="text" name="cursos_id" placeholder="Ingrese ID de curso" value="{{ old("cursos_id") }}"><br>
                        <input class="form-control" type="text" name="docente_id" placeholder="Ingrese ID de docente" value="{{ old("docente_id") }}"><br>
                        <input class="form-control" type="text" name="carga_horaria" placeholder="Ingrese carga horaria" value="{{ old("carga_horaria") }}"><br>
                        <input class="form-control" type="text" name="semestre_academico" placeholder="Ingrese el semestre academico" value="{{ old("semestre_academico") }}"><br>
                        <input class="btn btn-outline-primary" type="submit" value="Guardar"><br>
                </div>
                </form>

                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>
</div>
@endsection