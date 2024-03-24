<!DOCTYPE html>
<html lang="en" xmlns:th="http://www.thymeleaf.org">
<head>
    <meta charset="UTF-8">
    <title>Acciones</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha384-..." crossorigin="anonymous">
    <link rel="stylesheet" href="css/plantilla.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="shortcut icon" href="css/logobank.png" type="image/x-icon">
    <script>
    $(document).ready(function(){
        $(".aceptar").click(function(){
            var idAccion = $(this).data("id");
            alert("Aceptaste la acción con ID: " + idAccion);
        });

        $(".rechazar").click(function(){
            var idAccion = $(this).data("id");
            alert("Rechazaste la acción con ID: " + idAccion);
        });
    });
    </script>
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
            <h1>Aceptar o Rechazar Acción Pendiente</h1>
            <ul class="list-group">
                <?php
                $acciones_pendientes = array(
                    array('id' => 1, 'tipo' => 'Registro de Usuario', 'tabla' => 'usuarios', 'estado' => 'Pendiente'),
                    array('id' => 2, 'tipo' => 'Actualización', 'tabla' => 'cuentas bancarias', 'estado' => 'Pendiente'),
                    array('id' => 3, 'tipo' => 'Eliminación', 'tabla' => 'movimientos', 'estado' => 'Pendiente')
                );

                foreach ($acciones_pendientes as $accion) {
                    echo '<li class="list-group-item">';
                    echo '<b>Tipo:</b> ' . $accion['tipo'] . '<br>';
                    echo '<b>Tabla Afectada:</b> ' . $accion['tabla'] . '<br>';
                    echo '<b>Estado:</b> ' . $accion['estado'] . '<br>';
                    echo '<button type="button" class="btn btn-success btn-sm aceptar" data-id="' . $accion['id'] . '">Aceptar</button>';
                    echo '<button type="button" class="btn btn-danger btn-sm rechazar" data-id="' . $accion['id'] . '">Rechazar</button>';
                    echo '</li>';
                }
                ?>
            </ul>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-...">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha384-KyZXEAg3QhqLMpG8r+Knujsl5+gZbNl5+axdTf5VSWlTf4DK6pOY4eW8Jdut2Imy" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-x/GgqWSMvtdS5e4zHfNbFay3xx0VbpH8Cc8pZZyYNb/F7Sb0E4qZtwBv4/Bo0Dl+" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-9tAib7shGQZZDHAEw9GvG0fHn0XtJxFx1ZeXf5T0HHcP3cuHSCE3CtsN3vo3UCtD" crossorigin="anonymous"></script>
</script>
</body>
</html>
