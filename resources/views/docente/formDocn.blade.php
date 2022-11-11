@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow p-3 mb-5 bg-body rounded">
                <div class="card-header text-center" style="background-color: #d7e5f3;">{{ __('Registro de docente') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <form action="/guardar/docentes" method="post">
                        @csrf
                        <input class="form-control" type="text" name="carrera_id" placeholder="Ingrese id carrera" value="{{ old("carrera_id") }}"><br>
                        <input class="form-control" type="text" name="nombres" placeholder="Ingrese nombres" value="{{ old("nombres") }}"><br>
                        <input class="form-control" type="text" name="apellidos" placeholder="Ingrese apellidos" value="{{ old("apellidos") }}"><br>
                        <input class="form-control" type="text" name="DNI" placeholder="Ingrese DNI" value="{{ old("DNI") }}"><br>
                        <input class="form-control" type="text" name="correo" placeholder="Ingrese correo" value="{{ old("correo") }}"><br>
                        <input class="form-control" type="text" name="telefono" placeholder="Ingrese telefono" value="{{ old("telefono") }}"><br>
                        <input class="form-control" type="text" name="codigo" placeholder="Ingrese codigo" value="{{ old("codigo") }}"><br>
                        <input class="form-control" type="text" name="contraseña" placeholder="Ingrese contraseña" value="{{ old("contraseña") }}"><br>
                        <input class="form-control" type="text" name="estado" placeholder="Ingrese estado" value="{{ old("estado") }}"><br>
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