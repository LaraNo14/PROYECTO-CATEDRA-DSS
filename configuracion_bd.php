<?php
$servidor = "localhost"; 
$usuario_bd = "root"; 
$contrasena_bd = "";
$nombre_bd = "bancodeagriculturasv"; 


$conexion = mysqli_connect($servidor, $usuario_bd, $contrasena_bd, $nombre_bd);


if (!$conexion) {
    die("Error al conectar con la base de datos: " . mysqli_connect_error());
}
?>
