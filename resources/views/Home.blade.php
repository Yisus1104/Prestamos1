<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Inter', sans-serif;
            background-color: #f5f5f5;
            color: #333;
            overflow-x: hidden;
        }

        /* Hero Section */
        .hero-section {
            position: relative;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            color: #333;
            overflow: hidden;
        }

        .hero-section img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            opacity: 0.9; /* Ajusté la opacidad para que la imagen sea más visible */
            z-index: 0;
        }

        .hero-content {
            z-index: 1;
            max-width: 800px;
            padding: 40px;
            background: rgba(255, 255, 255, 0.1); /* Fondo semi-transparente */
            backdrop-filter: blur(10px); /* Efecto de vidrio esmerilado */
            border-radius: 15px;
            border: 1px solid rgba(255, 255, 255, 0.2); /* Borde sutil */
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
        }

        .hero-section h1 {
            font-size: 3.5rem;
            font-weight: 700;
            margin-bottom: 20px;
            color: #fff; /* Texto blanco para mayor contraste */
            font-family: 'Inter', sans-serif;
            text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.5);
        }

        .hero-section p {
            font-size: 1.25rem;
            color: #eee; /* Texto gris claro */
            margin-bottom: 30px;
            font-family: 'Inter', sans-serif;
            text-shadow: 1px 1px 4px rgba(0, 0, 0, 0.3);
        }

        .hero-section .btn {
            background-color: #007bff;
            border: none;
            padding: 12px 30px;
            font-size: 1rem;
            font-weight: 500;
            color: #fff;
            border-radius: 25px;
            transition: background-color 0.3s ease, transform 0.3s ease;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .hero-section .btn:hover {
            background-color: #0056b3;
            transform: translateY(-3px);
        }

        /* Footer */
        .footer {
            background-color: #222;
            padding: 20px;
            text-align: center;
            color: #ccc;
            font-size: 0.9rem;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
        }

        .footer a {
            color: #007bff;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .footer a:hover {
            color: #0056b3;
        }
    </style>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap" rel="stylesheet">
</head>
<body>

    @include('fragments.navbar')

    <!-- Hero Section -->
    <div class="hero-section">
        <img src="././img/yo.jpg" alt="Background Image">
        <div class="hero-content">
            <h1>Bienvenido a nuestro sitio</h1>
            <p>Descubre lo mejor que tenemos para ofrecer</p>
            <a href="{{ route('us') }}" class="btn">Saber más</a>
        </div>
    </div>

    <footer class="footer">
        &copy; 2025. Todos los derechos reservados. | <a href="#">Política de privacidad</a>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>