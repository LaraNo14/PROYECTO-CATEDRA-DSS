<?php
session_start();


if(isset($_SESSION['nombre_usuario'])) {
  
  $nombre_usuario = $_SESSION['nombre_usuario'];
} else {
  
  header("Location: login.php");
  exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>¡Bienvenido!</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="shortcut icon" href="css/logobank.png" type="image/x-icon">
  <style>
    body {
      background-image: url("css/fondobanco1.png");
      background-size: cover;
      background-position: center;
      font-family: Arial, sans-serif;
      text-align: center;
      margin: 0;
      padding: 0;
    }
    .welcome-container {
      max-width: 600px;
      margin: 50px auto;
      padding: 20px;
      background-color: rgba(255, 255, 255, 0.8);
      border-radius: 10px;
      box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
    }
    h2 {
      color: #007bff;
    }
    .btn-start {
      margin-top: 20px;
    }
  </style>
</head>
<body>
  <div class="welcome-container">
    <img src="css/logobanco.png" alt="Logo">
    <h2>Bienvenido, <?php echo $nombre_usuario; ?></h2>
    <p>¡Gracias por iniciar sesión!</p>
    <button class="btn btn-primary btn-start">Comenzar</button>
  </div>

  <script>
    document.querySelector('.btn-start').addEventListener('click', function() {
     
      window.location.href = "index.php";
    });
  </script>
</body>
</html>
