<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Página no encontrada</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <style>
        body {
            background: linear-gradient(135deg, #f7cac9, #6b5b95);
            color: #FFFFFF;
            height: 100vh;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: 'Arial', sans-serif;
        }

        .error-message {
            text-align: center;
            font-size: 3rem;
            font-weight: bold;
            color: #fff;
        }

        .btn {
            background: linear-gradient(135deg, #ff7e5f, #feb47b);
            border: none;
            border-radius: 50px;
            padding: 12px 30px;
            font-size: 1.2rem;
            color: #fff;
            text-decoration: none;
            margin-top: 20px;
        }

        .btn:hover {
            transform: scale(1.1);
            background: linear-gradient(135deg, #feb47b, #ff7e5f);
        }

    </style>
</head>
<body>

    <div class="error-message">
        Página no encontrada...
        <div>
            <!-- Este enlace será gestionado por la ruta '/error' que redirige a 'homeLog' o 'home' -->
            <a href="{{ route('error') }}" class="btn">Volver al inicio</a>
        </div>
    </div>

</body>
</html>
