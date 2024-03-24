<?php
  $movimientos = [
    ['id' => 1, 'cuenta' => '123456', 'fecha' => '2024-03-22', 'tipo' => 'Depósito', 'monto' => 500],
    ['id' => 2, 'cuenta' => '789012', 'fecha' => '2024-03-23', 'tipo' => 'Retiro', 'monto' => 200],
    ['id' => 3, 'cuenta' => '345678', 'fecha' => '2024-03-24', 'tipo' => 'Transferencia', 'monto' => 1000],
    ['id' => 4, 'cuenta' => '345679', 'fecha' => '2024-02-24', 'tipo' => 'Deposito', 'monto' => 3000],
    ['id' => 5, 'cuenta' => '345622', 'fecha' => '2023-01-24', 'tipo' => 'Retiro', 'monto' => 350],
    ['id' => 6, 'cuenta' => '345681', 'fecha' => '2024-07-22', 'tipo' => 'Transferencia', 'monto' => 775]
  ];
?>

<!DOCTYPE html>
<html lang="en" xmlns:th="http://www.thymeleaf.org">
<head>
    <meta charset="UTF-8">
    <title>Movimientos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha384-..." crossorigin="anonymous">
    <link rel="stylesheet" href="css/plantilla.css">
    <link rel="shortcut icon" href="css/logobank.png" type="image/x-icon">
    <style>
        body {
            background-color: #f0f0f0;
        }
        header {
            background-color: #2ecc71;
            color: white;
        }
        .navbar-brand-text {
            margin-left: 10px;
        }
        .navbar-nav .nav-link {
            color: white;
        }
        .table {
            background-color: white;
            border-radius: 10px;
        }
        .table th, .table td {
            border: none;
        }
        .table th {
            background-color: #2ecc71;
            color: white;
        }
        .table-striped tbody tr:nth-of-type(odd) {
            background-color: #e0e0e0;
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
                    <div class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownEventos" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-calendar-alt fa-lg"></i>
                            Aprobación de acciones
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownEventos">
                            <li><a class="dropdown-item" href="acciones.php">Lista del personal</a></li>
                        </ul>
                    </div>
                    <div class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownReservaciones" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-book fa-lg"></i>
                            Sucursal
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownReservaciones">
                            <li><a class="dropdown-item" href="sucursales.php">Registrar sucursal</a></li>
                        </ul>
                    </div>
                    <div class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMovimientos" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-exchange-alt fa-lg"></i> 
                            Movimientos
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMovimientos">
                            <li><a class="dropdown-item" href="movimientos.php">Historial de movimientos</a></li>
                        </ul>
                    </div>
                    <a class="nav-link" href="login.php">
                        <i class="fas fa-sign-in-alt fa-lg"></i>
                        Iniciar Sesión
                    </a>
                </div>
            </div>
        </div>
    </nav>
</header>
<div class="container">
    <div class="row">
        <div class="col"></div>
        <div class="col-10">
            <h1 class="text-center mt-4 mb-4">Movimientos de Cuentas Bancarias</h1>
            <table class="table table-striped table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th>ID de Transacción</th>
                        <th>Cuenta</th>
                        <th>Fecha</th>
                        <th>Tipo de Transacción</th>
                        <th>Monto</th>
                    </tr>
                </thead>
                <tbody id="table-body">
                    <!-- Aquí se cargarán los datos con Thymeleaf -->
                    <?php foreach ($movimientos as $movimiento): ?>
                        <tr>
                            <td><?php echo $movimiento['id']; ?></td>
                            <td><?php echo $movimiento['cuenta']; ?></td>
                            <td><?php echo $movimiento['fecha']; ?></td>
                            <td><?php echo $movimiento['tipo']; ?></td>
                            <td><?php echo $movimiento['monto']; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <div class="col"></div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-...">
</script>
</body>
</html>
