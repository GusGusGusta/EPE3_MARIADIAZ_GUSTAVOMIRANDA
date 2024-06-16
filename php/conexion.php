<?php
// Conexión a la base de datos
$servidor = "localhost";
$user = "root";
$password = "";
$database = "taller";
$conexion = new mysqli($servidor, $user, $password, $database);
if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}
?>
