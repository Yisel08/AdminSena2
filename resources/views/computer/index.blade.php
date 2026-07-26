@extends('layouts.app')

@section('content')
    <h1>LISTA COMPUTADORES</h1>

    <div class ="container">
        <table id="idComputer" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Numero</th>
                    <th>Marca</th>
                    <th>Detalle</th>
                </tr>
            </thead>
            <tbody>
                <a href="{{ route('computer.create') }}" class="btn btn-success">
                    <i class="bi bi-plus-circle"></i> Nuevo computador
                </a>
                @foreach ($computers as $computer)
                    <tr>
                        <br>
                        <td>{{ $computer->id }}</td>
                        <td>{{ $computer->number }}</td>
                        <td>{{ $computer->brand }}</td>
                        <td><a href="{{ route('computer.show', $computer->id) }}">Mostrar</a></td>

                        <br>

                    </tr>
                @endforeach

            </tbody>

        </table>

    </div>


@endsection<