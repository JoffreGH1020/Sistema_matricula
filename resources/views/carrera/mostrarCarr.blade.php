@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow p-3 mb-5 bg-body rounded">
                <div class="card-header text-center" style="background-color: #d7e5f3;">{{ __('Carreras') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <table class="table table-bordered">
                        <th>ID de las carreras </th>
                        <th>Nombre de la carrera</th>
                        <th>Facultad donde pertenece</th>

                        @foreach ($carrera as $carreras)
                        <tr>
                            <td>{{$carreras->id}}</td>
                            <td>{{$carreras->nombre_carr}}</td>
                            <td>{{$carreras->facultad_id}}</td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection