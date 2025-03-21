<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
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
        }

        /* Navbar Styling */
        .navbar {
            background-color: #000000;
            padding: 15px 30px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 9999;
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
            background-color: #FF4D00;
            transition: width 0.3s ease-in-out;
        }

        .nav-link:hover {
            color: #FF4D00;
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
        }

        .navbar-toggler-icon::before,
        .navbar-toggler-icon::after {
            content: '';
            background-color: #FFFFFF;
            width: 25px;
            height: 2px;
            position: absolute;
            left: 0;
            transition: transform 0.3s ease-in-out;
        }

        .navbar-toggler-icon::before {
            top: -8px;
        }

        .navbar-toggler-icon::after {
            top: 8px;
        }

        /* Register Form Styling */
        .register-container {
            background: rgba(0, 0, 0, 0.7);
            padding: 2rem;
            border-radius: 1rem;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
            max-width: 400px;
            width: 100%;
            animation: fadeIn 1s ease-in-out;
            margin-top: 100px; /* Space to prevent overlap with navbar */
        }

        .register-container h2 {
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
            color: #000000; /* White text inside input fields */
            background-color: #fff; /* Dark background for input fields */
        }

        .form-label {
            color: #fff; /* White color for labels */
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

        .form-check-label {
            font-size: 0.9rem;
        }

        .form-text {
            text-align: center;
            margin-top: 1rem;
            font-size: 0.9rem;
            color: #fff;
        }

        .form-text a {
            text-decoration: none;
            color: #f7cac9; /* Light color for better contrast */
            font-weight: bold;
        }

        .form-text a:hover {
            color: #6b5b95;
        }

        .alert {
            border-radius: 50px;
            font-size: 1rem;
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

    <div class="register-container">
        <h2>Regístrate</h2>

        <form action="{{ route('validar-registro') }}" method="POST">
            @csrf
            <!-- Nombre -->
            <div class="mb-3">
                <label for="name" class="form-label">Nombre Completo</label>
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Tu nombre completo" value="{{ old('name') }}">
                @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        
            <!-- Email -->
            <div class="mb-3">
                <label for="email" class="form-label">Correo Electrónico</label>
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="correo@ejemplo.com" value="{{ old('email') }}">
                @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        
            <!-- Contraseña -->
            <div class="mb-3">
                <label for="password" class="form-label">Contraseña</label>
                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="********">
                @error('password')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        
            <!-- Botón -->
            <button type="submit" class="btn btn-primary w-100">Registrarse</button>
        </form>

        <div class="form-text mt-3">
            ¿Ya tienes cuenta? <a href="{{ route('login') }}">Inicia sesión aquí</a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
