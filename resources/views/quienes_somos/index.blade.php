@extends('layouts.app')

@section('content')

<div class="container py-5">

    <!-- TITULO -->
    <div class="text-center mb-5">

        <h1 class="text-success fw-bold">
            ¿Quiénes somos?
        </h1>

        <p class="text-muted">
            Servicio Nacional de Aprendizaje - SENA
        </p>

    </div>


    <!-- PRESENTACION -->
    <div class="row align-items-center mb-5">

        <div class="col-md-6">

            <h2 class="text-success fw-bold">
                SENA
            </h2>

            <p>
                El Servicio Nacional de Aprendizaje (SENA) es una entidad
                pública de Colombia que ofrece formación profesional
                integral para contribuir al desarrollo social, económico
                y tecnológico del país.
            </p>

            <p>
                A través de sus programas de formación, el SENA busca
                brindar a los colombianos oportunidades para fortalecer
                sus conocimientos, habilidades y competencias para el
                mundo laboral y el emprendimiento.
            </p>

        </div>


        <div class="col-md-6 text-center">

            <img src="{{ asset('images/logo-sena.png') }}"
                 alt="Logo SENA"
                 width="180">

        </div>

    </div>

    <!-- MISION Y VISION -->
<div class="row g-4 mt-3">

    <!-- MISION -->
    <div class="col-md-6">

        <div class="card h-100 shadow border-0">

            <!-- ENCABEZADO -->
            <div class="card-header bg-success text-white text-center py-3">

                <h3 class="fw-bold mb-0">
                    🎯 Misión
                </h3>

            </div>

            <!-- CONTENIDO -->
          <div class="card-body p-4 text-center">

         <p class="text-dark lh-lg">
        El SENA está encargado de cumplir la función que
        le corresponde al Estado de invertir en el desarrollo
        social y técnico de los trabajadores colombianos,
        ofreciendo y ejecutando la formación profesional
        integral para la incorporación y el desarrollo de
        las personas en actividades productivas que
        contribuyan al desarrollo social, económico y
        tecnológico del país.
         </p>

         </div>

        </div>

    </div>


    <!-- VISION -->
    <div class="col-md-6">

        <div class="card h-100 shadow border-0">

            <!-- ENCABEZADO -->
            <div class="card-header bg-success text-white text-center py-3">

                <h3 class="fw-bold mb-0">
                    👁️ Visión
                </h3>

            </div>

            <!-- CONTENIDO -->
           <div class="card-body p-4 text-center">

        <p class="text-dark lh-lg">
        El SENA busca ser reconocido por la efectividad
        de su gestión, la calidad de sus programas de
        formación y por contribuir al desarrollo de las
        personas, las empresas y el país mediante la
        formación profesional integral, la innovación
        y el fortalecimiento de las competencias.
        </p>

        </div>

        </div>

    </div>

</div>
             
@endsection