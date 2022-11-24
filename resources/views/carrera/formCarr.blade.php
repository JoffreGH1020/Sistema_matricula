@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow p-3 mb-5 bg-body rounded">
                <div class="card-header text-center" style="background-color: #d7e5f3;"><b>{{ __('Registro de carreras') }}</b></div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <form action="/guardar/carrera" method="post">
                        @csrf
                        <label for="exampleInputEmail1" class="form-label">Ingrese la carrera</label>
                        <input class="form-control" type="text" name="nombre_carr" placeholder="Ingrese carrera" value="{{ old("nombre_carr") }}"><br>
                        <div class="row mb-3">
                        <label for="exampleInputEmail1" class="form-label">Ingrese la facultad que pertenece</label>
                            <div class="col-md-6">
                                <select class="form-select" name="facultad_id" id="facultad_id">
                                    @foreach($facultad as $facultades)
                                    <option value="{{$facultades->id}}">{{$facultades->nombre_facultad}}</option>
                                    @endforeach
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