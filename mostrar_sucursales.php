<?php
require_once "conexion.php";

$sql = "SELECT id, nombre, ubicacion, gerente_id FROM sucursales";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="css/logobank.png" type="image/x-icon">
</head>
<body>

<div class="container mt-5 custom-bg-white">
    <h3>Sucursales Registradas</h3>
    <table class="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Ubicación</th>
                <th>ID Gerente</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Mostrar datos en la tabla
            if ($result->num_rows > 0) {
              while($row = $result->fetch_assoc()) {
                echo "<tr><td>" . $row["id"]. "</td><td>" . $row["nombre"]. "</td><td>" . $row["ubicacion"] . "</td><td>" . $row["gerente_id"]. "</td></tr>";
              }
            } else {
              echo "<tr><td colspan='4'>No hay sucursales registradas</td></tr>";
            }
            ?>
        </tbody>
    </table>
</div>

</body>
</html>

<?php
$conn->close();
?>
