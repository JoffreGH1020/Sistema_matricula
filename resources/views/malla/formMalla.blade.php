@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow p-3 mb-5 bg-body rounded">
                <div class="card-header text-center" style="background-color: #d7e5f3;">{{ __('Registro de malla') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <form action="/guardar/mallas" method="post">
                        @csrf
                        
                        <div class="row mb-3">

                            <div class="col-md-6">
                                <select class="form-select" name="curso_id" id="curso_id">
                                    @foreach($curso as $cursos)
                                    <option value="{{$cursos->id}}">{{$cursos->asignatura}}</option>
                                    @endforeach
                                </select>
                                
                            </div>
                        </div>
                        <input class="form-control" type="text" name="codigo" placeholder="Ingrese codigo" value="{{ old("codigo") }}"><br>
                        <input class="form-control" type="text" name="prerequisitos" placeholder="Ingrese prerequisitos" value="{{ old("prerequisitos") }}"><br>
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