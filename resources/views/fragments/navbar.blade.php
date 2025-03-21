<style>
    .navbar {
        background-color: rgba(0, 0, 0, 0.9); /* Fondo semi-transparente */
        padding: 10px 30px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        backdrop-filter: blur(10px); /* Efecto de vidrio esmerilado */
        border-bottom: 1px solid rgba(255, 255, 255, 0.1); /* Borde sutil */
    }

    .navbar-brand img {
        height: 50px;
        transition: transform 0.3s ease-in-out;
    }

    .navbar-brand img:hover {
        transform: scale(1.1);
    }

    .nav-link {
        color: #FFFFFF;
        font-size: 1rem;
        text-transform: uppercase;
        letter-spacing: 1px;
        margin: 0 15px;
        position: relative;
        transition: color 0.3s ease-in-out;
    }

    .nav-link::after {
        content: '';
        position: absolute;
        bottom: -5px;
        left: 0;
        width: 0;
        height: 2px;
        background-color: #007bff; /* Color azul moderno */
        transition: width 0.3s ease-in-out;
    }

    .nav-link:hover {
        color: #007bff; /* Color azul al hacer hover */
    }

    .nav-link:hover::after {
        width: 100%;
    }

    .navbar-toggler {
        border: none;
        color: #FFFFFF;
    }

    .navbar-toggler-icon {
        background-image: none;
        width: 25px;
        height: 2px;
        background-color: #FFFFFF;
        display: inline-block;
        position: relative;
        transition: background-color 0.3s ease-in-out;
    }

    .navbar-toggler-icon::before,
    .navbar-toggler-icon::after {
        content: '';
        background-color: #FFFFFF;
        width: 25px;
        height: 2px;
        position: absolute;
        left: 0;
        transition: transform 0.3s ease-in-out, background-color 0.3s ease-in-out;
    }

    .navbar-toggler-icon::before {
        top: -8px;
    }

    .navbar-toggler-icon::after {
        top: 8px;
    }

    /* Efecto al abrir el menú */
    .navbar-toggler[aria-expanded="true"] .navbar-toggler-icon {
        background-color: transparent;
    }

    .navbar-toggler[aria-expanded="true"] .navbar-toggler-icon::before {
        transform: rotate(45deg);
        top: 0;
    }

    .navbar-toggler[aria-expanded="true"] .navbar-toggler-icon::after {
        transform: rotate(-45deg);
        top: 0;
    }

    /* Estilos para el menú desplegable en móviles */
    @media (max-width: 991.98px) {
        .navbar-collapse {
            background-color: rgba(0, 0, 0, 0.9); /* Fondo semi-transparente */
            backdrop-filter: blur(10px); /* Efecto de vidrio esmerilado */
            padding: 10px;
            border-radius: 10px;
            margin-top: 10px;
        }

        .nav-link {
            margin: 10px 0;
            text-align: center;
        }
    }
</style>

<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
        <!-- Logo -->
        <a class="navbar-brand" href="{{ auth()->check() ? route('privada') : route('home') }}">
            <img src="././img/herr.png" alt="Logo">
        </a>

        <!-- Botón de menú para móviles -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Contenido del navbar -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto">
                <!-- Si el usuario está autenticado -->
                @auth
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('prestamos') }}">Préstamos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('categorias') }}">Categorías</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('usuarios') }}">Usuarios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contact') }}">Contáctanos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Cerrar Sesión</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                @endauth

                <!-- Si el usuario no está autenticado -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Iniciar Sesión</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">Registrarse</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('us') }}">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contact') }}">Contáctanos</a>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>