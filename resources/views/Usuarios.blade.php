<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gestión de Usuarios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <style>
        body {
            background: linear-gradient(135deg, #6b5b95, #f7cac9);
            min-height: 100vh;
            margin: 0;
            font-family: 'Arial', sans-serif;
            padding-top: 80px; /* Ajustado para evitar el conflicto con el navbar */
        }

        .container {
            padding: 2rem;
        }

        .table-container {
            padding: 2rem;
        }

        /* Estilo de la tabla */
        .table {
            width: 100%;
            border-collapse: collapse;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.2);
        }

        .table th, .table td {
            padding: 15px;
            text-align: center;
            background-color: #ffffff;
            color: #333;
            font-size: 14px;
            border-bottom: 1px solid #ddd;
        }

        .table th {
            background-color: #6b5b95;
            color: white;
            font-size: 14px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .table tbody tr {
            background-color: #fafafa;
            transition: background-color 0.3s ease;
        }

        .table tbody tr:hover {
            background-color: #f0f0f0;
            cursor: pointer;
        }

        .btn-primary {
            background: linear-gradient(135deg, #ff7e5f, #feb47b);
            border: none;
            border-radius: 50px;
            padding: 10px 20px;
            font-size: 1rem;
            transition: transform 0.3s ease, background 0.3s ease;
        }

        .btn-primary:hover {
            transform: scale(1.1);
            background: linear-gradient(135deg, #feb47b, #ff7e5f);
        }

        .btn-danger {
            background: linear-gradient(135deg, #ff4b2b, #ff416c);
            border: none;
            border-radius: 8px;
        }

        .btn-danger:hover {
            background: linear-gradient(135deg, #ff6b6b, #ff4b2b);
        }

        .btn-warning {
            background: linear-gradient(135deg, #f39c12, #e67e22);
            border: none;
            border-radius: 8px;
        }

        .btn-warning:hover {
            background: linear-gradient(135deg, #e67e22, #f39c12);
        }

        .modal-content {
            border-radius: 1rem;
        }

        .form-control {
            border-radius: 8px;
        }

        .modal-confirmation {
            background-color: rgba(0, 0, 0, 0.8);
            color: #fff;
            padding: 1rem;
            border-radius: 15px;
            text-align: center;
        }

        /* Estilos para el navbar */
        .navbar {
            background-color: #000000;
            padding: 15px 30px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            z-index: 1000;
            position: fixed;
            width: 100%;
            top: 0;
        }

        .navbar-brand {
            font-size: 1.8rem;
            font-weight: bold;
            color: #FFFFFF;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            transition: color 0.3s ease-in-out;
        }

        .navbar-brand:hover {
            color: #FF4D00;
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

        .nav-link:hover {
            color: #FF4D00;
        }

        .table-container {
            margin-top: 100px;
        }

    </style>
</head>
<body>

    @include('fragments.navbar') <!-- Navbar inclusion -->

    <div class="container">
        <h1 class="text-center text-white mb-4">Gestión de Usuarios</h1>

        <!-- Botón para abrir el modal -->
        <div class="text-center mb-4">
            <button class="btn btn-primary px-4 py-2" data-bs-toggle="modal" data-bs-target="#addUserModal">Registrar Usuario</button>
        </div>

        <!-- Modal para registrar usuario -->
        <div class="modal fade" id="addUserModal" tabindex="-1" aria-labelledby="addUserModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addUserModalLabel">Registrar Usuario</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="#" method="POST">
                        @csrf
                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="matricula" class="form-label">Matrícula</label>
                                <input type="text" class="form-control" id="matricula" name="matricula" required>
                            </div>
                            <div class="mb-3">
                                <label for="nombre" class="form-label">Nombre</label>
                                <input type="text" class="form-control" id="nombre" name="nombre" required>
                            </div>
                            <div class="mb-3">
                                <label for="correo" class="form-label">Correo</label>
                                <input type="email" class="form-control" id="correo" name="correo" required>
                            </div>
                            <div class="mb-3">
                                <label for="telefono" class="form-label">Teléfono</label>
                                <input type="text" class="form-control" id="telefono" name="telefono" required>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Registrar</button>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Tabla de usuarios -->
        <div class="table-container mt-4">
            <table class="table">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Matrícula</th>
                        <th>Nombre</th>
                        <th>Correo</th>
                        <th>Teléfono</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>12345</td>
                        <td>Juan Pérez</td>
                        <td>juanperez@example.com</td>
                        <td>(123) 456-7890</td>
                        <td>
                            <button class="btn btn-danger btn-sm">Eliminar</button>
                            <button class="btn btn-warning btn-sm">Editar</button>
                        </td>
                    </tr>
                    <!-- Más filas agregadas dinámicamente -->
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>
</html>
