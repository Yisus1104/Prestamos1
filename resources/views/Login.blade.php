<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
            background: linear-gradient(135deg, #6b5b95, #f7cac9);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            position: relative;
        }

        /* Estilos para el navbar */
        .navbar {
            position: absolute;
            top: 0;
            width: 100%;
            z-index: 1000;
        }

        .navbar a {
            color: #fff;
            text-decoration: none;
        }

        .navbar .navbar-brand {
            color: #f7cac9;
        }

        .navbar .navbar-nav .nav-link {
            color: #fff;
            transition: color 0.3s;
        }

        .navbar .navbar-nav .nav-link:hover {
            color: #f7cac9;
        }

        .login-container {
            background: rgba(0, 0, 0, 0.7);
            padding: 2rem;
            border-radius: 1rem;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
            max-width: 400px;
            width: 100%;
            animation: fadeIn 1s ease-in-out;
            margin-top: 5rem; /* Aseguramos que no se solape con el navbar */
        }

        .login-container h2 {
            text-align: center;
            margin-bottom: 1.5rem;
            font-size: 2rem;
            font-weight: bold;
            color: #fff;
        }

        .form-control {
            border-radius: 50px;
            border: 1px solid #ccc;
            padding: 0.75rem 1rem;
        }

        .form-label {
            color: #fff;
        }

        .btn-primary {
            background: linear-gradient(135deg, #6b5b95, #f7cac9);
            border: none;
            border-radius: 50px;
            padding: 0.75rem 1rem;
            transition: transform 0.3s ease, background 0.3s ease;
        }

        .btn-primary:hover {
            transform: scale(1.05);
            background: linear-gradient(135deg, #f7cac9, #6b5b95);
        }

        .alert {
            border-radius: 50px;
            font-size: 1rem;
        }

        .form-text {
            text-align: center;
            margin-top: 1rem;
            font-size: 0.9rem;
            color: #fff;
        }

        .form-text a {
            text-decoration: none;
            color: #f7cac9; /* Contraste claro */
            font-weight: bold;
        }

        .form-text a:hover {
            color: #6b5b95;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>
<body>

    @include('fragments.navbar')  <!-- Navbar inclusion -->

    <div class="login-container">
        <h2>Iniciar Sesión</h2>

        <form action="{{ route('inicia-sesion') }}" method="POST">
            @csrf

            <!-- Email -->
            <div class="mb-3">
                <label for="email" class="form-label">Correo Electrónico</label>
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="correo@ejemplo.com" value="{{ old('email') }}" required>
                @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Contraseña -->
            <div class="mb-3">
                <label for="password" class="form-label">Contraseña</label>
                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="********" required>
                @error('password')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Botón -->
            <button type="submit" class="btn btn-primary w-100 mt-3">Iniciar Sesión</button>
        </form>

        <!-- Enlace "¿No tienes cuenta?" -->
        <div class="form-text mt-3">
            ¿No tienes cuenta? <a href="{{ route('register') }}">Regístrate aquí</a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
