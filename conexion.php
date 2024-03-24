<?php
$servername = "localhost:3306"; 
$username = "root";
$password = "";
$database = "bancodeagriculturasv";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

mysqli_set_charset($conn, "utf8mb4");
?>
