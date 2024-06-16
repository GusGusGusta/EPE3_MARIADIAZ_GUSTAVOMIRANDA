<?php
// Incluir archivo de conexión a la base de datos
include '../../php/conexion.php';

// Inicializar variables para mensajes de alerta
$alerta = "";

// Verificar si el formulario ha sido enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $rut = $_POST['rut'];
    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];
    $tipo = $_POST['tipo'];

    // Validar que los campos no estén vacíos
    if (!empty($rut) && !empty($correo) && !empty($contrasena) && !empty($tipo)) {
        // Preparar consulta SQL para insertar el usuario
        $sql = "INSERT INTO usuarios (Rut, Correo, Contraseña, Tipo) VALUES ('$rut', '$correo', '$contrasena', '$tipo')";

        // Ejecutar la consulta y verificar si se insertó correctamente
        if ($conexion->query($sql) === TRUE) {
            $alerta = "Usuario agregado correctamente.";
        } else {
            $alerta = "Error al agregar el usuario: " . $conexion->error;
        }
    } else {
        $alerta = "Por favor complete todos los campos.";
    }
}

// Cerrar conexión a la base de datos
$conexion->close();

// Redirigir de vuelta a la página anterior con mensaje de alerta
header("Location: " . $_SERVER['HTTP_REFERER'] . "?alerta=" . urlencode($alerta));
exit();
?>
