<?php
// Incluir el archivo de conexión a la base de datos
include '../../php/conexion.php';

// Obtener el ID del usuario a editar
$rut = $_GET['id'];

// Verificar si el formulario ha sido enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los nuevos datos del formulario
    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];
    $tipo = $_POST['tipo'];

    // Actualizar el usuario en la base de datos
    $sql = "UPDATE usuarios SET Correo='$correo', Contraseña='$contrasena', Tipo='$tipo' WHERE Rut='$rut'";
    
    if ($conexion->query($sql) === TRUE) {
        $mensaje = "Usuario actualizado correctamente.";
        $exito = true;
    } else {
        $mensaje = "Error al actualizar el usuario: " . $conexion->error;
        $exito = false;
    }
}

// Obtener los detalles del usuario actual
$sql = "SELECT * FROM usuarios WHERE Rut='$rut'";
$resultado = $conexion->query($sql);
$usuario = $resultado->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuario</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Editar Usuario</h1>
        <form method="post" action="">
            <div class="form-group">
                <label for="correo">Correo del Usuario:</label>
                <input type="email" class="form-control" id="correo" name="correo" value="<?php echo $usuario['Correo']; ?>" required>
            </div>
            <div class="form-group">
                <label for="contrasena">Contraseña del Usuario:</label>
                <input type="text" class="form-control" id="contrasena" name="contrasena" value="<?php echo $usuario['Contraseña']; ?>" required>
            </div>
            <div class="form-group">
                <label for="tipo">Tipo de Usuario:</label>
                <input type="text" class="form-control" id="tipo" name="tipo" value="<?php echo $usuario['Tipo']; ?>" required>
            </div>
            <button type="submit" class="btn btn-primary">Actualizar</button>
            <a href="../../paginas/mantenedores/usuarios.php" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>

    <?php if (isset($mensaje)): ?>
    <script>
        alert('<?php echo $mensaje; ?>');
        window.location.href = '../../paginas/mantenedores/repuestos.php';
    </script>
    <?php endif; ?>
</body>
</html>

<?php
// Cerrar la conexión a la base de datos
$conexion->close();
?>
