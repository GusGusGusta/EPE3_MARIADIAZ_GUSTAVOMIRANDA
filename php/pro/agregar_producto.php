<?php
// Incluir archivo de conexión a la base de datos
include '../../php/conexion.php';

// Verificar si el formulario ha sido enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $nombreRepuesto = $_POST['nombreRepuesto'];
    $precioUnitario = $_POST['precioUnitario'];
    $cantidadStock = $_POST['cantidadStock'];

    // Preparar consulta SQL para insertar el nuevo repuesto
    $sql = "INSERT INTO repuestos (NombreRepuesto, PrecioUnitario, CantidadStock)
            VALUES ('$nombreRepuesto', $precioUnitario, $cantidadStock)";

    if ($conexion->query($sql) === TRUE) {
        // Éxito al insertar el repuesto
        $alert_message = "Repuesto agregado correctamente.";
    } else {
        // Error al insertar el repuesto
        $alert_message = "Error al agregar el repuesto: " . $conexion->error;
    }

    // Redirigir a la página anterior con mensaje de alerta
    header("Location: ../../paginas/mantenedores/repuestos.php?alert_message=" . urlencode($alert_message));
    exit();
}

// Cerrar conexión a la base de datos
$conexion->close();
?>
