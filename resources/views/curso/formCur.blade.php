@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow p-3 mb-5 bg-body rounded">
                <div class="card-header text-center" style="background-color: #d7e5f3;">{{ __('Registro de cursos') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif


                    <form action="/guardar/cursos" method="post">
                        @csrf
                        
                        <div class="row mb-3">

                            <div class="col-md-6">
                                <select class="form-select" name="carrera_id" id="carrera_id">
                                    @foreach($carrera as $carreras)
                                    <option value="{{$carreras->id}}">{{$carreras->nombre_carr}}</option>
                                    @endforeach
                                </select>
                                
                            </div>
                        </div>
                        <input class="form-control" type="text" name="tipo_de_estudio" placeholder="Ingrese tipo de estudio" value="{{ old("tipo_de_estudio") }}"><br>
                        <input class="form-control" type="text" name="asignatura" placeholder="Ingrese asignatura" value="{{ old("asignatura") }}"><br>
                        <input class="form-control" type="text" name="ciclo" placeholder="Ingrese ciclo" value="{{ old("ciclo") }}"><br>
                        <input class="form-control" type="text" name="creditos" placeholder="Ingrese creditos" value="{{ old("creditos") }}"><br>
                        <input class="form-control" type="text" name="HT_sema" placeholder="Ingrese horas teoricas semanales" value="{{ old("HT_sema") }}"><br>
                        <input class="form-control" type="text" name="HP_sema" placeholder="Ingrese horas practicas semanales" value="{{ old("HP_sema") }}"><br>
                        <input class="form-control" type="text" name="TH_sema" placeholder="Ingrese horas torales semanales" value="{{ old("TH_sema") }}"><br>
                        <input class="form-control" type="text" name="HT_seme" placeholder="Ingrese horas teoricas semestrales" value="{{ old("HT_seme") }}"><br>
                        <input class="form-control" type="text" name="HP_seme" placeholder="Ingrese horas practicas semestrales" value="{{ old("HP_seme") }}"><br>
                        <input class="form-control" type="text" name="TH_seme" placeholder="Ingrese horas totales semestrales" value="{{ old("TH_seme") }}"><br>
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