<?php
// Incluir el archivo de conexión a la base de datos
include '../../php/conexion.php';

// Obtener el ID del usuario a eliminar
$rut = $_GET['id'];

// Eliminar el usuario de la base de datos
$sql = "DELETE FROM usuarios WHERE Rut='$rut'";

if ($conexion->query($sql) === TRUE) {
    $mensaje = "Usuario eliminado correctamente.";
    $exito = true;
} else {
    $mensaje = "Error al eliminar el usuario: " . $conexion->error;
    $exito = false;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar Usuario</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Eliminar Usuario</h1>
        <?php if (isset($mensaje)): ?>
            <script>
                alert('<?php echo $mensaje; ?>');
                window.location.href = '../../paginas/mantenedores/usuarios.php';
            </script>
        <?php endif; ?>
    </div>
</body>
</html>

<?php
// Cerrar la conexión a la base de datos
$conexion->close();
?>
