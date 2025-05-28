<footer class="bg-dark text-white pt-4 pb-3 mt-5">
    <div class="container">
        <div class="row">

            <!-- Sobre la empresa -->
            <div class="col-md-4 mb-3">
                <h5>Mi Empresa</h5>
                <p>Somos líderes en formación técnica y tecnológica. Brindamos cursos de calidad para tu desarrollo
                    profesional.</p>
            </div>

            <!-- Enlaces rápidos -->
            <div class="col-md-4 mb-3">
                <h5>Enlaces Rápidos</h5>
                <ul class="list-unstyled">
                    <li><a href="{{ route('trainingcenter.index') }}" class="text-white text-decoration-none">Centro de
                            formación</a></li>
                    <li><a href="{{ route('computer.index') }}" class="text-white text-decoration-none">Computadores</a>
                    </li>
                    <li><a href="{{ route('area.index') }}" class="text-white text-decoration-none">Áreas</a></li>
                    <li><a href="{{ route('course.index') }}" class="text-white text-decoration-none">Cursos</a></li>
                    <li><a href="{{ route('teacher.index') }}" class="text-white text-decoration-none">Profesores</a>
                    </li>
                    <li><a href="{{ route('apprentice.index') }}" class="text-white text-decoration-none">Aprendices</a>
                    </li>
                </ul>
            </div>

            <!-- Contacto -->
            <div class="col-md-4 mb-3">
                <h5>Contacto</h5>
                <p>Email: contacto@miempresa.com</p>
                <p>Teléfono: +57 123 456 7890</p>
                <p>Dirección: Calle 123, Ciudad, País</p>
                <div>
                    <a href="#" class="text-white me-3" aria-label="Facebook">
                        <i class="bi bi-facebook" style="font-size: 1.5rem;"></i> Facebook
                    </a><br>
                    <a href="#" class="text-white me-3" aria-label="Twitter">
                        <i class="bi bi-twitter" style="font-size: 1.5rem;"></i> Twitter
                    </a><br>
                    <a href="#" class="text-white" aria-label="Instagram">
                        <i class="bi bi-instagram" style="font-size: 1.5rem;"></i> Instagram
                    </a>
                </div>
            </div>

        </div>

        <hr class="bg-white">

        <div class="text-center">
            <small>&copy; {{ date('Y') }} Mi Empresa - Todos los derechos reservados</small>
        </div>
    </div>
</footer>
