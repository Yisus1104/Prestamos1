<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gestión de Préstamos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <style>
        body {
            background: linear-gradient(135deg, #6b5b95, #f7cac9);
            min-height: 100vh;
            margin: 0;
            font-family: 'Arial', sans-serif;
            padding-top: 70px; /* Espacio adicional para el navbar */
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
            border-radius: 8px; /* Bordes redondeados */
            overflow: hidden; /* Elimina el desbordamiento */
            box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.2); /* Sombra sutil */
        }

        .table th, .table td {
            padding: 15px;
            text-align: center;
            background-color: #ffffff; /* Fondo blanco para las celdas */
            color: #333;
            font-size: 14px;
            border-bottom: 1px solid #ddd; /* Borde sutil entre filas */
        }

        /* Cambiar color de los encabezados */
        .table th {
            background-color: #6b5b95; /* Color morado suave para los encabezados */
            color: white;
            font-size: 14px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        /* Estilo de las filas */
        .table tbody tr {
            background-color: #fafafa; /* Fondo suave para las filas */
            transition: background-color 0.3s ease; /* Transición suave para el hover */
        }

        .table tbody tr:hover {
            background-color: #f0f0f0; /* Efecto hover para filas */
            cursor: pointer; /* Cambiar cursor al pasar sobre las filas */
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

        /* Diseño del modal */
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

        /* Diseño de la tabla */
        .table-container {
            margin-top: 100px;
        }

        /* Contenedor de búsqueda y botón de registrar */
        .search-container {
            display: flex;
            justify-content: center; /* Centra los elementos */
            align-items: center;
            gap: 20px; /* Espacio entre el botón de registrar y el campo de búsqueda */
            margin-bottom: 20px;
        }

        /* Estilos del input de búsqueda */
        .search-input {
            width: 300px;
            padding: 8px;
            border-radius: 8px;
            border: 1px solid #ccc;
            font-size: 1rem;
        }

        /* Estilos del botón de búsqueda */
        .search-btn {
            padding: 8px 16px;
            margin-left: 10px;
            background-color: #6b5b95;
            color: white;
            border: none;
            border-radius: 8px;
            cursor: pointer;
        }

        .search-btn:hover {
            background-color: #ff7e5f;
        }

    </style>
</head>
<body>
    @include('fragments.navbar')

    <div class="container">
        <h1 class="text-center text-white mb-4">Gestión de Préstamos</h1>

        <!-- Sección de búsqueda de préstamos y botón de registrar -->
        <div class="search-container">
            <!-- Campo de búsqueda -->
            <input type="text" class="search-input" placeholder="Buscar préstamo...">
            <!-- Botón para abrir el modal -->
            <button class="btn btn-primary px-4 py-2" data-bs-toggle="modal" data-bs-target="#addLoanModal">Registrar Préstamo</button>
        </div>

        <!-- Modal para registrar préstamo -->
        <div class="modal fade" id="addLoanModal" tabindex="-1" aria-labelledby="addLoanModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addLoanModalLabel">Registrar Préstamo</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="#" method="POST">
                        @csrf
                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="usuario" class="form-label">Usuario</label>
                                <input type="text" class="form-control" id="usuario" name="usuario" required>
                            </div>
                            <div class="mb-3">
                                <label for="prestamista" class="form-label">Prestamista</label>
                                <input type="text" class="form-control" id="prestamista" name="prestamista" required>
                            </div>
                            <div class="mb-3">
                                <label for="material" class="form-label">Material</label>
                                <input type="text" class="form-control" id="material" name="material" required>
                            </div>
                            <div class="mb-3">
                                <label for="cantidad" class="form-label">Cantidad</label>
                                <input type="number" class="form-control" id="cantidad" name="cantidad" required>
                            </div>
                            <div class="mb-3">
                                <label for="fecha_salida" class="form-label">Fecha de Salida</label>
                                <input type="date" class="form-control" id="fecha_salida" name="fecha_salida" required>
                            </div>
                            <div class="mb-3">
                                <label for="fecha_entrega" class="form-label">Fecha de Entrega</label>
                                <input type="date" class="form-control" id="fecha_entrega" name="fecha_entrega" required>
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

        <!-- Tabla de préstamos -->
        <div class="table-container mt-4">
            <table class="table">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Usuario</th>
                        <th>Prestamista</th>
                        <th>Material</th>
                        <th>Cantidad</th>
                        <th>Fecha Salida</th>
                        <th>Fecha Entrega</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Juan Pérez</td>
                        <td>Proveedor A</td>
                        <td>Martillo</td>
                        <td>10</td>
                        <td>2025-01-01</td>
                        <td>2025-01-15</td>
                        <td>
                            <button class="btn btn-danger btn-sm">Eliminar</button>
                            <button class="btn btn-warning btn-sm">Editar</button>
                        </td>
                    </tr>
                    <!-- Aquí se añadirán más filas dinámicamente -->
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>
</html>
