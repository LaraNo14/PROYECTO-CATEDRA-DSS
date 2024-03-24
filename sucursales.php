<!DOCTYPE html>
<html lang="en" xmlns:th="http://www.thymeleaf.org">
<head>
    <meta charset="UTF-8">
    <title>Sucursales</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha384-..." crossorigin="anonymous">
    <link rel="stylesheet" href="css/plantilla.css">
    <link rel="shortcut icon" href="css/logobank.png" type="image/x-icon">
    <style>
        .custom-bg-white {
            background-color: white;
            padding: 20px;
            border-radius: 10px; /* Opcional: para redondear las esquinas */
        }
    </style>
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img src="css/logobank.png" alt="LogoBanco">
                <span class="navbar-brand-text">BANCO DE AGRICULTURA SALVADOREÑO</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ms-auto">

    <!-- Sección "Acciones" no editar si no es necesario po favo -->
    <div class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownEventos" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fas fa-calendar-alt fa-lg"></i>
            Aprobación de acciones
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdownEventos">
            <li><a class="dropdown-item" href="acciones.php">Lista del personal</a></li>
        </ul>
    </div>

    <!-- Sección "Sucursal" no editar si no es necesario po favo -->
    <div class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownReservaciones" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fas fa-book fa-lg"></i>
            Sucursal
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdownReservaciones">
            <li><a class="dropdown-item" href="sucursales.php">Registrar sucursal</a></li>
        </ul>
    </div>

     <!-- Sección "Movimientos" no editar si no es necesario po favo -->
    <div class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMovimientos" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fas fa-exchange-alt fa-lg"></i> 
            Movimientos
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMovimientos">
            <li><a class="dropdown-item" href="movimientos.php">Historial de movimientos</a></li>
        </ul>
    </div>

   <!-- Sección "Iniciar sesión" no editar si no es necesario po favo -->
    <a class="nav-link" href="login.php">
        <i class="fas fa-sign-in-alt fa-lg"></i>
        Iniciar Sesión
    </a>
</div>

            </div>
        </div>
    </nav>
</header>
<div class="container mt-5">
    <div class="row">
        <div class="custom-bg-white">
            <h3>Crear Nueva Sucursal</h3>
            <form method="post" action="agregar_sucursal.php">
                <div class="mb-3">
                    <label for="nombre_sucursal" class="form-label">Nombre de la Sucursal:</label>
                    <input type="text" class="form-control" id="nombre_sucursal" name="nombre_sucursal" required>
                </div>
                <div class="mb-3">
                    <label for="ubicacion" class="form-label">Ubicación:</label>
                    <input type="text" class="form-control" id="ubicacion" name="ubicacion"required>
                </div>
                <div class="mb-3">
                    <label for="id_gerente" class="form-label">ID del Nuevo Gerente:</label>
                    <input type="text" class="form-control" id="id_gerente" name="id_gerente" required>
                </div>
                <button type="submit" class="btn btn-primary">Agregar Sucursal</button>
            </form>
        </div>
    </div>
</div>

<?php
include "mostrar_sucursales.php";
?>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-...">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha384-KyZXEAg3QhqLMpG8r+Knujsl5+gZbNl5+axdTf5VSWlTf4DK6pOY4eW8Jdut2Imy" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-x/GgqWSMvtdS5e4zHfNbFay3xx0VbpH8Cc8pZZyYNb/F7Sb0E4qZtwBv4/Bo0Dl+" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-9tAib7shGQZZDHAEw9GvG0fHn0XtJxFx1ZeXf5T0HHcP3cuHSCE3CtsN3vo3UCtD" crossorigin="anonymous"></script>
</script>
</body>
</html>
