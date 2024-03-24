<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <?php
        require_once "conexion.php";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nombre = $_POST["nombre_sucursal"];
            $ubicacion = $_POST["ubicacion"];
            $gerente_id = $_POST["id_gerente"];
            
            if (!empty($nombre) && preg_match('/^[A-Za-z0-9\s]+$/', $nombre)) {
                if (!empty($ubicacion) && ctype_alpha(str_replace(' ', '', $ubicacion))) {
                    if (!empty($gerente_id) && ctype_digit($gerente_id)) {
                        $sql = "INSERT INTO sucursales (nombre, ubicacion, gerente_id) VALUES (?, ?, ?)";
                        $stmt = $conn->prepare($sql);
                        $stmt->bind_param("ssi", $nombre, $ubicacion, $gerente_id);
                        if ($stmt->execute()) {
                            ?>
                            <div class="alert alert-success" role="alert">
                                <strong>Nueva sucursal agregada correctamente.</strong>
                            </div>
                            <?php
                        } else {
                            ?>
                            <div class="alert alert-danger" role="alert">
                                <strong>Error al agregar la sucursal:</strong> <?php echo $conn->error; ?>
                            </div>
                            <?php
                        }
                        $stmt->close();
                    } else {
                        ?>
                        <div class="alert alert-danger" role="alert">
                            <strong>Error:</strong> ID del gerente no válido.
                        </div>
                        <?php
                    }
                } else {
                    ?>
                    <div class="alert alert-danger" role="alert">
                        <strong>Error:</strong> Ubicación no válida, debe contener solo letras.
                    </div>
                    <?php
                }
            } else {
                ?>
                <div class="alert alert-danger" role="alert">
                    <strong>Error:</strong> Nombre de la sucursal no válido, debe contener letras y números.
                </div>
                <?php
            }
        }
        $conn->close();
        ?>
        <a href="sucursales.php" class="btn btn-primary">Regresar</a>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.6/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>
