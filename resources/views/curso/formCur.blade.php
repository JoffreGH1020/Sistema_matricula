@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow p-3 mb-5 bg-body rounded">
                <div class="card-header text-center" style="background-color: #d7e5f3;"><b>{{ __('Registro de cursos') }}</b></div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif


                    <form action="/guardar/cursos" method="post">
                        @csrf
                        
                        <div class="row mb-3">
                        <label for="exampleInputEmail1" class="form-label">Seleccione la carrera</label>
                            <div class="col-md-6">
                                <select class="form-select" name="carrera_id" id="carrera_id">
                                    @foreach($carrera as $carreras)
                                    <option value="{{$carreras->id}}">{{$carreras->nombre_carr}}</option>
                                    @endforeach
                                </select>
                                
                            </div>
                        </div>
                        <label for="exampleInputEmail1" class="form-label">Ingrese el tipo de estudio</label>
                        <input class="form-control" type="text" name="tipo_de_estudio" placeholder="Tipo de estudio" value="{{ old("tipo_de_estudio") }}"><br>
                        <label for="exampleInputEmail1" class="form-label">Ingrese la asignatura</label>
                        <input class="form-control" type="text" name="asignatura" placeholder="Asignatura" value="{{ old("asignatura") }}"><br>
                        <label for="exampleInputEmail1" class="form-label">Ciclo al que pertenece</label>
                        <input class="form-control" type="text" name="ciclo" placeholder="Ciclo" value="{{ old("ciclo") }}"><br>
                        <label for="exampleInputEmail1" class="form-label">Ingrese los creditos</label>
                        <input class="form-control" type="text" name="creditos" placeholder="Creditos" value="{{ old("creditos") }}"><br>
                        <label for="exampleInputEmail1" class="form-label">Ingrese las horas teóricas</label>
                        <input class="form-control" type="text" name="HT_sema" placeholder="Horas teoricas semanales" value="{{ old("HT_sema") }}"><br>
                        <label for="exampleInputEmail1" class="form-label">Ingrese horas prácticas</label>
                        <input class="form-control" type="text" name="HP_sema" placeholder="Horas practicas semanales" value="{{ old("HP_sema") }}"><br>
                        <label for="exampleInputEmail1" class="form-label">Ingrese las horas totales</label>
                        <input class="form-control" type="text" name="TH_sema" placeholder="Horas torales semanales" value="{{ old("TH_sema") }}"><br>
                        <label for="exampleInputEmail1" class="form-label">Ingrese las horas teóricas</label>
                        <input class="form-control" type="text" name="HT_seme" placeholder="Horas teoricas semestrales" value="{{ old("HT_seme") }}"><br>
                        <label for="exampleInputEmail1" class="form-label">Ingrese horas prácticas</label>
                        <input class="form-control" type="text" name="HP_seme" placeholder="Horas practicas semestrales" value="{{ old("HP_seme") }}"><br>
                        <label for="exampleInputEmail1" class="form-label">Ingrese las horas totales</label>
                        <input class="form-control" type="text" name="TH_seme" placeholder="Horas totales semestrales" value="{{ old("TH_seme") }}"><br>
                        <input class="btn btn-outline-primary shadow" type="submit" value="Guardar"><br>
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