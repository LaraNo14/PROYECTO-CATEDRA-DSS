<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Iniciar Sesión</title>
  <script src="js/validaciones.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/loginn.css">
  <link rel="shortcut icon" href="css/logobank.png" type="image/x-icon">
</head>
<body>
  <div class="login-container">
    <img src="css/logobanco.png" alt="Logo"> 
    <h2>Iniciar Sesión</h2>
    <br>
    <?php 
    session_start();
    if (isset($_SESSION["mensaje"]) && isset($_SESSION["tipo"])) {
      $mensaje = $_SESSION["mensaje"];
      $tipo = $_SESSION["tipo"];
      echo "<div class='mensaje-banner $tipo'>$mensaje</div>";
      unset($_SESSION["mensaje"]);
      unset($_SESSION["tipo"]);
    }
    ?>
    <br>
  
    <form action="procesar_login.php" method="POST" onsubmit="return validarInicioSesion()"> 
      <div class="form-group">
        <input type="text" class="form-control" id="nombre_usuario" name="nombre_usuario" placeholder="Ingresa tu nombre de usuario" required>
      </div>
      <div class="form-group">
        <input type="password" class="form-control" id="contrasena" name="contrasena" placeholder="Ingresa tu contraseña" required>
      </div>
      <button type="submit" class="btn btn-primary btn-block">Ingresar</button>
    </form>
    <p class="mt-3">¿No tienes una cuenta? <a href="registro.php">Registrarse</a></p> 

</body>
</html>
