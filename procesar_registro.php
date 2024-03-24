<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    require_once "configuracion_bd.php"; 

    
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $nombre_usuario = $_POST["nombre_usuario"];
    $contrasena = $_POST["contrasena"];
    $tipo_usuario = $_POST["tipo_usuario"];

   
    $consulta = "INSERT INTO Usuarios (nombre, email, nombre_usuario, contrasena, tipo_usuario) VALUES ('$nombre', '$email', '$nombre_usuario', '$contrasena', '$tipo_usuario')";

    
    if (mysqli_query($conexion, $consulta)) {
        
        header("Location: registro.php?mensaje=¡Registro exitoso! Redireccionando...&tipo=exito");
        exit; 
    } else {
        header("Location: registro.php?mensaje=Error, el usuario ya esta registrado: " . mysqli_error($conexion) . "&tipo=error");
        exit; 
    }

    
    mysqli_close($conexion);
}
?>
