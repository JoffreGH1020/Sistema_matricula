@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow p-3 mb-5 bg-body rounded">
                <div class="card-header text-center" style="background-color: #d7e5f3;">{{ __('Matrícula') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <form action="/guardar/matriculas" method="post">
                        @csrf
                        
                        <input class="form-control" type="text" name="curso" placeholder="Ingrese curso" value="{{old("curso")}}"><br>
                        <input class="form-control" type="text" name="ciclo" placeholder="Ingrese ciclo" value="{{old("ciclo")}}"><br>
                        <input class="form-control" type="text" name="creditos" placeholder="Ingrese creditos" value="{{old("creditos")}}"><br>
                        <div class="row mb-3">

                            <div class="col-md-6">
                                <select class="form-select" name="seccion" id="seccion">
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="C">C</option>
                                    <option value="D">D</option>
                                </select>
                            </div>
                        </div>

                        <input class="btn btn-outline-primary" type="submit" value="Guardar"><br>
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