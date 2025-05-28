<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
        <a class="navbar-brand fw-bold" href="#">Admin SENA</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Menú
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('trainingcenter.index') }}">Centros de formación</a>
                        </li>
                        <li><a class="dropdown-item" href="{{ route('computer.index') }}">Computadores</a></li>
                        <li><a class="dropdown-item" href="{{ route('area.index') }}">Áreas</a></li>
                        <li><a class="dropdown-item" href="{{ route('course.index') }}">Cursos</a></li>
                        <li><a class="dropdown-item" href="{{ route('teacher.index') }}">Profesores</a></li>
                        <li><a class="dropdown-item" href="{{ route('apprentice.index') }}">Aprendices</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Otro enlace</a></li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link disabled" tabindex="-1" aria-disabled="true">Deshabilitado</a>
                </li>
            </ul>

            <form class="d-flex" role="search" method="GET" action="#">
                <input class="form-control me-2" type="search" placeholder="Buscar..." aria-label="Buscar"
                    name="q" required />
                <button class="btn btn-outline-light" type="submit">Buscar</button>
            </form>
        </div>
    </div>
</nav>
