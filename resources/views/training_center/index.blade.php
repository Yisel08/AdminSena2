@extends('layouts.app')

@section('content')
    <h1>LISTA CENTROS DE FORMACION</h1>

    <div class ="container">
        <table id="idTraining_center" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Ubicacion</th>
                    <th>Detalle</th>
                </tr>
            </thead>
            <tbody>
                <a href="{{ route('training_center.create') }}" class="btn btn-success">
                    <i class="bi bi-plus-circle"></i> Nuevo centro de formacion
                </a>
                @foreach ($centers as $center)
                    <tr>
                        <br>
                        <td>{{ $center->id }}</td>
                        <td>{{ $center->name }}</td>
                        <td>{{ $center->location }}</td>
                        <td><a href="{{ route('training_center.show', $center->id) }}">Mostrar</a></td>

                        <br>

                    </tr>
                @endforeach

            </tbody>

        </table>

    </div>


@endsection<