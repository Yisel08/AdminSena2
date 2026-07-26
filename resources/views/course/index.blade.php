@extends('layouts.app')

@section('content')
    <h1>LISTA CURSOS</h1>

    <div class ="container">
        <table id="idCourse" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Numero curso</th>
                    <th>Dia</th>
                    <th>Id Area</th>
                    <th>Id CentroFormacion</th>
                    <th>Detalle</th>
                </tr>
            </thead>
            <tbody>
                <a href="{{ route('course.create') }}" class="btn btn-success">
                    <i class="bi bi-plus-circle"></i> Nuevo curso
                </a>
                @foreach ($cursos as $curso)
                    <tr>
                        <br>
                         <td>{{ $curso->id}}</td>
                         <td>{{ $curso->course_number}}</td>
                         <td>{{ $curso->day}}</td>
                         <td>{{ $curso->area_id}}</td>
                         <td>{{ $curso->training_center_id}}</td>
                        <td><a href="{{ route('course.show', $curso->id) }}">Mostrar</a></td>
                        <br>

                    </tr>
                @endforeach

            </tbody>

        </table>

    </div>


@endsection<