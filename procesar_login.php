<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    require_once "configuracion_bd.php"; 

    $nombre_usuario = $_POST["nombre_usuario"];
    $contrasena = $_POST["contrasena"];

    
    $consulta = "SELECT * FROM Usuarios WHERE nombre_usuario='$nombre_usuario' AND contrasena='$contrasena'";

   
    $resultado = mysqli_query($conexion, $consulta);

    
    if (mysqli_num_rows($resultado) == 1) {
        
        session_start();
        $_SESSION["nombre_usuario"] = $nombre_usuario;
        header("Location: bienvenida.php"); 
        exit;
    } else {
        
        session_start();
        $_SESSION["mensaje"] = "Nombre de usuario o contraseña incorrectos.";
        $_SESSION["tipo"] = "error";
        header("Location: login.php"); 
        exit;
    }

   
    mysqli_close($conexion);
}
?>
