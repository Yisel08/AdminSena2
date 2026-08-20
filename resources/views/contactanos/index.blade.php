@extends('layouts.app')

@section('content')

<div class="container py-5">

    <div class="text-center mb-5">

        <h1 class="text-success fw-bold">
            Contáctanos
        </h1>

        <p class="text-muted">
            Estamos aquí para ayudarte
        </p>

    </div>


    <div class="row justify-content-center">

        <div class="col-md-8">

            <div class="card shadow-sm">

                <div class="card-body p-4">

                    <h4 class="text-success mb-4">
                        Información de contacto
                    </h4>

                    <p>
                        <strong>📍 Ubicación:</strong>
                        Centro de Formación SENA
                    </p>

                    <p>
                        <strong>📞 Teléfono:</strong>
                        000 000 0000
                    </p>

                    <p>
                        <strong>✉️ Correo:</strong>
                        contacto@adminsena.com
                    </p>

                    <hr>

                    <h5 class="mb-3">
                        Envíanos un mensaje
                    </h5>

                    <form>

                        <div class="mb-3">

                            <label class="form-label">
                                Nombre
                            </label>

                            <input type="text"
                                   class="form-control"
                                   placeholder="Escribe tu nombre">

                        </div>


                        <div class="mb-3">

                            <label class="form-label">
                                Correo electrónico
                            </label>

                            <input type="email"
                                   class="form-control"
                                   placeholder="correo@ejemplo.com">

                        </div>


                        <div class="mb-3">

                            <label class="form-label">
                                Mensaje
                            </label>

                            <textarea class="form-control"
                                      rows="5"
                                      placeholder="Escribe tu mensaje"></textarea>

                        </div>


                        <button type="submit"
                                class="btn btn-success">
                            Enviar mensaje
                        </button>

                    </form>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection