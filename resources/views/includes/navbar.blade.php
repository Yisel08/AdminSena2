<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e8f5e9;">
    <div class="container-fluid px-4">

        <!-- LOGO + NOMBRE -->
        <a class="navbar-brand fw-bold text-success fs-4 me-5 d-flex align-items-center gap-2"
            href="{{ url('/') }}">

            <img src="{{ asset('images/logo-sena.png') }}"
                alt="Logo SENA"
                height="40">

            Admin Sena
        </a>


        <!-- BOTÓN PARA CELULAR -->
        <button class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation">

            <span class="navbar-toggler-icon"></span>
        </button>


        <!-- MENÚ -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <ul class="navbar-nav mx-auto mb-2 mb-lg-0 gap-3">

                <!-- QUIÉNES SOMOS -->
                <li class="nav-item">
                    <a class="nav-link text-success fw-semibold"href="{{ route('quienes.somos') }}">
                     ¿Quiénes somos?
                    </a>
                </li>
                


                <!-- ADMINISTRACIÓN -->
                <li class="nav-item dropdown">

                    <a class="nav-link dropdown-toggle text-success fw-semibold"
                        href="#"
                        id="administracionDropdown"
                        role="button"
                        data-bs-toggle="dropdown"
                        aria-expanded="false">

                        Administración
                    </a>


                    <!-- OPCIONES DEL DROPDOWN -->
                    <ul class="dropdown-menu" aria-labelledby="administracionDropdown">

                        <li>
                            <a class="dropdown-item"
                                href="{{ route('teacher.list') }}">
                                Teachers
                            </a>
                        </li>

                        <li>
                            <a class="dropdown-item"
                                href="{{ route('course.list') }}">
                                Courses
                            </a>
                        </li>

                        <li>
                            <a class="dropdown-item"
                                href="{{ route('area.list') }}">
                                Areas
                            </a>
                        </li>

                        <li>
                            <a class="dropdown-item"
                                href="{{ route('aprendice.list') }}">
                                Aprendices
                            </a>
                        </li>

                        <li>
                            <a class="dropdown-item"
                                href="{{ route('computer.list') }}">
                                Computers
                            </a>
                        </li>

                        <li>
                            <a class="dropdown-item"
                                href="{{ route('training_center.list') }}">
                                Training Center
                            </a>
                        </li>

                    </ul>

                </li>


                <!-- CONTACTANOS -->
                <li class="nav-item">
                    <a class="nav-link text-success fw-semibold"href="{{ route('contactanos') }}">
                       Contáctanos
                   </a>
                </li>


                <!-- BUSCAR -->
                <li class="nav-item">
                <form class="d-flex" role="search">
             <input
                class="form-control form-control-sm me-2"
                type="search"
                placeholder="Buscar..."
                aria-label="Buscar">

            <button
                class="btn btn-outline-success btn-sm"
                type="submit">
                 🔍
            </button>
                </form>
               </li>

            </ul>


            <!-- USUARIO -->
            <div class="d-flex align-items-center">

                <a href="#"
                    class="btn btn-outline-success rounded-circle">

                    👤

                </a>

            </div>

        </div>

    </div>
</nav>