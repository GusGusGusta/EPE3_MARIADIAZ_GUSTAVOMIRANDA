<?php
// Conexión a la base de datos
$servidor = "localhost";
$usuario = "root";
$password = "";
$base_datos = "taller";

$conexion = new mysqli($servidor, $usuario, $password, $base_datos);

// Verificar la conexión
if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}

// Consulta SQL para obtener los productos
$sql = "SELECT * FROM productos";
$resultado = $conexion->query($sql);

// Verificar si hay resultados
if ($resultado->num_rows > 0) {
    echo '<h2>Productos</h2>';
    echo '<ul>';

    // Mostrar cada producto en una lista
    while ($fila = $resultado->fetch_assoc()) {
        echo '<li>' . $fila['nombre'] . ' - ' . $fila['precio'] . '</li>';
    }

    echo '</ul>';
} else {
    echo "No se encontraron productos.";
}

// Cerrar la conexión
$conexion->close();
?>
