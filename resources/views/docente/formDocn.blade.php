@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow p-3 mb-5 bg-body rounded">
                <div class="card-header text-center" style="background-color: #d7e5f3;"><b>{{ __('Registro de docente') }}</b></div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <form action="/guardar/docentes" method="post">
                        @csrf
                        <div class="row mb-3">
                        <label for="exampleInputEmail1" class="form-label">Seleccione la carrera al que pertenece</label>
                            <div class="col-md-6">
                                <select class="form-select" name="carrera_id" id="carrera_id">
                                    @foreach($carrera as $carreras)
                                    <option value="{{$carreras->id}}">{{$carreras->nombre_carr}}</option>
                                    @endforeach
                                </select>
                                
                            </div>
                        </div>
                        <label for="exampleInputEmail1" class="form-label">Ingrese los nombres</label>
                        <input class="form-control" type="text" name="nombres" placeholder="Nombres" value="{{ old("nombres") }}"><br>
                        <label for="exampleInputEmail1" class="form-label">Ingrese los apellidos</label>
                        <input class="form-control" type="text" name="apellidos" placeholder="Apellidos" value="{{ old("apellidos") }}"><br>
                        <label for="exampleInputEmail1" class="form-label">Ingrese el DNI del docente</label>
                        <input class="form-control" type="text" name="DNI" placeholder=" DNI" value="{{ old("DNI") }}"><br>
                        <label for="exampleInputEmail1" class="form-label">Ingrese el correo electrónico del docente</label>
                        <input class="form-control" type="text" name="correo" placeholder="Correo" value="{{ old("correo") }}"><br>
                        <label for="exampleInputEmail1" class="form-label">Ingrese el número de teléfono</label>
                        <input class="form-control" type="text" name="telefono" placeholder="Telefono" value="{{ old("telefono") }}"><br>
                        <label for="exampleInputEmail1" class="form-label">Ingrese el codigo para el docente</label>
                        <input class="form-control" type="text" name="codigo" placeholder="Ingrese codigo" value="{{ old("codigo") }}"><br>
                        <label for="exampleInputEmail1" class="form-label">Ingrese la contraseña para el docente</label>
                        <input class="form-control" type="text" name="contraseña" placeholder="Ingrese contraseña" value="{{ old("contraseña") }}"><br>
                        <div class="row mb-3">

                            <div class="col-md-6">
                            <label for="exampleInputEmail1" class="form-label">Ingrese el estado del docente</label>
                                <select class="form-select" name="estado" id="estado">
                                    
                                    <option value="1">Activo</option>
                                    <option value="0">Inactivo</option>
                                    
                                </select>
                                
                            </div>
                        </div>
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