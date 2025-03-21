<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Categorías</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <style>
        body {
            background: linear-gradient(135deg, #6b5b95, #f7cac9);
            min-height: 100vh;
            margin: 0;
            font-family: 'Arial', sans-serif;
            padding-top: 90px; /* Ajustado para que el contenido no quede debajo del navbar */
        }

        .container {
            padding: 2rem;
        }

        .menu-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 2rem;
        }

        .menu-title {
            font-size: 2.5rem;
            margin-bottom: 2rem;
            font-weight: bold;
            letter-spacing: 1px;
            color: #fff;
        }

        .menu-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            width: 100%;
            max-width: 800px;
        }

        .menu-item {
            background: rgba(255, 255, 255, 0.15);
            border-radius: 1rem;
            padding: 2rem;
            text-align: center;
            color: #fff;
            text-decoration: none;
            font-weight: bold;
            font-size: 1.25rem;
            transition: transform 0.3s, box-shadow 0.3s, background 0.3s;
            backdrop-filter: blur(10px);
        }

        .menu-item:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3);
            background: rgba(255, 255, 255, 0.3);
        }

        .btn-primary {
            background: linear-gradient(135deg, #ff7e5f, #feb47b);
            border: none;
            border-radius: 50px;
            padding: 12px 30px;
            font-size: 1.2rem;
            text-align: center;
            transition: transform 0.3s ease, background 0.3s ease;
            text-decoration: none;
            color: #fff;
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

        .navbar {
            background-color: #000000;
            padding: 15px 30px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            z-index: 1000;
            position: fixed;
            width: 100%;
            top: 0;
        }

        .navbar-brand img {
            height: 50px;
            transition: transform 0.3s ease-in-out;
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

    </style>
</head>
<body>

    @include('fragments.navbar')  <!-- Navbar inclusion -->

    <div class="menu-container">
        <div class="menu-title">Selecciona un Recurso</div>
        <div class="menu-grid">
            <!-- Botones para cada categoría -->
            <a href="{{ route('electronicos') }}" class="menu-item btn btn-primary">Electrónicos</a>
            <a href="{{ route('herramientas') }}" class="menu-item btn btn-primary">Herramientas</a>
            <a href="{{ route('papel') }}" class="menu-item btn btn-primary">Papelería / Libros</a>
            <a href="{{ route('mobiliario') }}" class="menu-item btn btn-primary">Mobiliario</a>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

</body>
</html>
