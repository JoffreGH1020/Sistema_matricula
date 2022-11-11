@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow p-3 mb-5 bg-body rounded">
                <div class="card-header text-center" style="background-color: #d7e5f3;">{{ __('Registro de carreras') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <form action="/guardar/carrera" method="post">
                        @csrf
                        <input class="form-control" type="text" name="nombre_carr" placeholder="Ingrese carrera" value="{{ old("nombre_carr") }}"><br>
                        <input class="form-control" type="text" name="facultad_id" placeholder="Ingrese id facultad" value="{{ old("facultad_id") }}"><br>
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