<?php
// Incluir el archivo de conexión a la base de datos
include '../../php/conexion.php';

// Obtener el ID del producto a eliminar
$id = $_GET['id'];

// Eliminar el producto de la base de datos
$sql = "DELETE FROM repuestos WHERE RepuestoID=$id";

if ($conexion->query($sql) === TRUE) {
    $mensaje = "Producto eliminado correctamente.";
    $exito = true;
} else {
    $mensaje = "Error al eliminar el producto: " . $conexion->error;
    $exito = false;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar Producto</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Eliminar Producto</h1>
        <?php if (isset($mensaje)): ?>
            <script>
                alert('<?php echo $mensaje; ?>');
                window.location.href = '../../paginas/mantenedores/repuestos.php';
            </script>
        <?php endif; ?>
    </div>
</body>
</html>

<?php
// Cerrar la conexión a la base de datos
$conexion->close();
?>
