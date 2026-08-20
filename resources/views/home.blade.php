@extends('layouts.app')

@section('content')

<div id="carouselSena" class="carousel slide" data-bs-ride="carousel">

    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselSena" data-bs-slide-to="0" class="active" aria-current="true"></button>
        <button type="button" data-bs-target="#carouselSena" data-bs-slide-to="1"></button>
        <button type="button" data-bs-target="#carouselSena" data-bs-slide-to="2"></button>
        <button type="button" data-bs-target="#carouselSena" data-bs-slide-to="3"></button>
    </div>

    <div class="carousel-inner">

        <div class="carousel-item active">
            <img src="{{ asset('images/sena1.jpg') }}" class="d-block w-100" style="height: 450px; object-fit: cover;" alt="SENA">
            <div class="carousel-caption d-none d-md-block">
                <h2 class="fw-bold">Formación que transforma vidas</h2>
                <p>El SENA contribuye al desarrollo de los colombianos mediante la formación profesional integral.</p>
            </div>
        </div>

        <div class="carousel-item">
            <img src="{{ asset('images/sena2.jpg') }}" class="d-block w-100" style="height: 450px; object-fit: cover;" alt="Aprendices SENA">
            <div class="carousel-caption d-none d-md-block">
                <h2 class="fw-bold">Educación y oportunidades</h2>
                <p>Fortaleciendo conocimientos y competencias para el mundo laboral.</p>
            </div>
        </div>

        <div class="carousel-item">
            <img src="{{ asset('images/sena3.jpg') }}" class="d-block w-100" style="height: 450px; object-fit: cover;" alt="Tecnología SENA">
            <div class="carousel-caption d-none d-md-block">
                <h2 class="fw-bold">Innovación y tecnología</h2>
                <p>Preparando a los aprendices para los desafíos del futuro.</p>
            </div>
        </div>

        <div class="carousel-item">
            <img src="{{ asset('images/sena4.jpg') }}" class="d-block w-100" style="height: 450px; object-fit: cover;" alt="Centro de formación SENA">
            <div class="carousel-caption d-none d-md-block">
                <h2 class="fw-bold">El SENA, presente en Colombia</h2>
                <p>Generando oportunidades de formación y desarrollo para los colombianos.</p>
            </div>
        </div>

    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#carouselSena" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
        <span class="visually-hidden">Anterior</span>
    </button>

    <button class="carousel-control-next" type="button" data-bs-target="#carouselSena" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
        <span class="visually-hidden">Siguiente</span>
    </button>

</div>


<div class="container py-5">

    <div class="text-center">
        <h1 class="text-success fw-bold">Bienvenido a Admin Sena</h1>
        <p class="lead">
            Plataforma de administración y gestión de información del centro de formación SENA.
        </p>
        <p>
            Desde esta plataforma podrás consultar y administrar información relacionada con aprendices, instructores, cursos, áreas, computadores y centros de formación.
        </p>
    </div>

    <div class="row g-4 mt-4 justify-content-center">

        <div class="col-lg-4 col-md-6">
            <div class="card h-100 shadow-sm text-center">
                <div class="card-body">
                    <div class="fs-1">👨‍🎓</div>
                    <h4 class="text-success">Aprendices</h4>
                    <p>Consulta y administra la información de los aprendices.</p>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6">
            <div class="card h-100 shadow-sm text-center">
                <div class="card-body">
                    <div class="fs-1">👨‍🏫</div>
                    <h4 class="text-success">Teachers</h4>
                    <p>Gestiona la información de los instructores.</p>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6">
            <div class="card h-100 shadow-sm text-center">
                <div class="card-body">
                    <div class="fs-1">📚</div>
                    <h4 class="text-success">Courses</h4>
                    <p>Administra los cursos y programas de formación.</p>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6">
            <div class="card h-100 shadow-sm text-center">
                <div class="card-body">
                    <div class="fs-1">💻</div>
                    <h4 class="text-success">Computers</h4>
                    <p>Consulta la información de los computadores disponibles.</p>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6">
            <div class="card h-100 shadow-sm text-center">
                <div class="card-body">
                    <div class="fs-1">🏢</div>
                    <h4 class="text-success">Áreas</h4>
                    <p>Administra las distintas áreas temáticas y operativas.</p>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6">
            <div class="card h-100 shadow-sm text-center">
                <div class="card-body">
                    <div class="fs-1">🏛️</div>
                    <h4 class="text-success">Training Center</h4>
                    <p>Gestiona la información de los centros de formación.</p>
                </div>
            </div>
        </div>

    </div>

</div>

@endsection