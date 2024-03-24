<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registro</title>
  <script src="js/validaciones.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/registro.css">
  <link rel="shortcut icon" href="css/logobank.png" type="image/x-icon">
  
</head>
<body>
  <div class="registro-container">
    <img src="css/logobanco.png" alt="Logo"> 
    <h2>Regístrate con nosotros!</h2>
    <br>
    <form action="procesar_registro.php" method="POST" onsubmit="return validarRegistro()">
            <div class="form-group">
                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingresa tu nombre" required>
            </div>
            <div class="form-group">
                <input type="email" class="form-control" id="email" name="email" placeholder="Ingresa un correo electrónico válido (nombre@gmail.com)" required>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" id="nombre_usuario" name="nombre_usuario" placeholder="Ingresa tu nombre de usuario" required>
            </div>
            <div class="form-group">
                <input type="password" class="form-control" id="contrasena" name="contrasena" placeholder="Ingresa tu contraseña" required>
            </div>
            <div class="form-group">
            <input type="hidden" name="tipo_usuario" value="cliente">
            </div>
            <button type="submit" class="btn btn-primary btn-block">Registrarse</button>
        </form>
    <p class="mt-3">¿Ya tienes una cuenta? <a href="login.php">Iniciar sesión</a></p>
  </div>

  
  <div class="mensaje-banner" id="mensajeBanner"></div>

  <script>
    function mostrarMensaje(mensaje, tipo) {
      var banner = document.getElementById("mensajeBanner");
      banner.innerHTML = mensaje;
      banner.classList.add(tipo);
      banner.style.display = "block";
      setTimeout(function() {
        banner.style.display = "none";
        banner.classList.remove(tipo);
      }, 2000);
    }
    
   
    var urlParams = new URLSearchParams(window.location.search);
    var mensaje = urlParams.get('mensaje');
    var tipo = urlParams.get('tipo');
    if (mensaje && tipo) {
      mostrarMensaje(mensaje, tipo);
    
      setTimeout(function() {
        window.location.href = "login.php";
      }, 2000); 
    }
  </script>
  
</body>
</html>