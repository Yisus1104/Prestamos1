<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomeLog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <style>
        body {
            background: linear-gradient(135deg, #6b5b95, #f7cac9);
            min-height: 100vh;
            margin: 0;
            font-family: 'Arial', sans-serif;
            display: flex;
            flex-direction: column;
        }

        .menu-container {
            flex: 1;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 2rem;
        }

        .menu-title {
            font-size: 3rem;
            margin-bottom: 3rem;
            font-weight: bold;
            letter-spacing: 1px;
            color: #fff;
        }

        .menu-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); /* Ajustamos el tamaño para más flexibilidad */
            gap: 2rem;
            width: 100%;
            max-width: 1000px; /* Aumentamos el tamaño máximo */
            padding: 0 2rem;
        }

        .menu-item {
            background: rgba(255, 255, 255, 0.15);
            border-radius: 1rem;
            padding: 3rem; /* Hicimos los botones más grandes */
            text-align: center;
            color: #fff;
            text-decoration: none;
            font-weight: bold;
            font-size: 1.5rem; /* Aumentamos el tamaño de la fuente */
            transition: transform 0.3s, box-shadow 0.3s, background 0.3s;
            backdrop-filter: blur(10px);
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
            overflow: hidden;
            height: 250px; /* Ajustamos la altura de los botones */
        }

        .menu-item:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3); /* Mejoramos el efecto al hacer hover */
            background: rgba(255, 255, 255, 0.3);
        }

        .menu-item .icon {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 4rem; /* Aumentamos el tamaño del ícono */
            color: #fff;
            opacity: 0.7;
        }

        .menu-item .text {
            z-index: 1;
            font-size: 1.75rem; /* Aumentamos el tamaño del texto */
        }

        .btn-primary {
            background: linear-gradient(135deg, #ff7e5f, #feb47b);
            border: none;
            border-radius: 50px;
            padding: 15px 40px;
            font-size: 1.5rem; /* Aumentamos el tamaño del texto en los botones */
            text-align: center;
            transition: transform 0.3s ease, background 0.3s ease;
            text-decoration: none;
            color: #fff;
            display: inline-flex;
            align-items: center;
        }

        .btn-primary:hover {
            transform: scale(1.1);
            background: linear-gradient(135deg, #feb47b, #ff7e5f);
        }

        footer {
            text-align: center;
            color: #fff;
            padding: 1rem;
        }

        .menu-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            position: absolute;
            top: 0;
            left: 0;
            opacity: 0.5;
        }

    </style>
</head>
<body>
    @include('fragments.navbar')

    <div class="menu-container">
        <div class="menu-title">Panel Principal</div>
        <div class="menu-grid">
            <!-- Prestamos Button -->
            <a href="{{ route('prestamos') }}" class="menu-item">
                <img src="././img/yo.jpg" alt="Prestamos">
                <div class="icon"><i class="bi bi-credit-card"></i></div>
                <div class="text">Prestamos</div>
            </a>

            <!-- Categorías Button -->
            <a href="{{ route('categorias') }}" class="menu-item">
                <img src="././img/yo.jpg" alt="Categorías">
                <div class="icon"><i class="bi bi-tags"></i></div>
                <div class="text">Categorías</div>
            </a>

            <!-- Usuarios Button -->
            <a href="{{ route('usuarios') }}" class="menu-item">
                <img src="././img/yo.jpg" alt="Usuarios">
                <div class="icon"><i class="bi bi-person"></i></div>
                <div class="text">Usuarios</div>
            </a>
        </div>
    </div>

    <footer>
        &copy; {{ date('Y') }} Todos los derechos reservados.
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>
</html>
