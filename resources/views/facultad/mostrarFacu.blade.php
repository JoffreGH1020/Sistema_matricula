@extends('layouts.app')

@section('content')
<div class="container" >
    <div class="row justify-content-center ">
        <div class="col-md-8">
            <div class="card shadow p-3 mb-5 bg-body rounded" >
                <div class="card-header text-center" style="background-color: #d7e5f3;" ><b>{{ __('Facultades') }}</b></div>

                <div class="card-body" >
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <table class="table table-bordered ">
                        <th>ID de la facultad</th>
                        <th>Nombre de la facultad</th>

                        @foreach ($facultad as $facultades)
                        <tr>
                            <td>{{$facultades->id}}</td>
                            <td>{{$facultades->nombre_facultad}}</td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection