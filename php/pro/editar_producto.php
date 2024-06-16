<?php
// Incluir el archivo de conexión a la base de datos
include '../../php/conexion.php';

// Obtener el ID del producto a editar
$id = $_GET['id'];

// Verificar si el formulario ha sido enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los nuevos datos del formulario
    $nombre = $_POST['nombre'];
    $precio = $_POST['precio'];
    $stock = $_POST['stock'];

    // Actualizar el producto en la base de datos
    $sql = "UPDATE repuestos SET NombreRepuesto='$nombre', PrecioUnitario='$precio', CantidadStock='$stock' WHERE RepuestoID=$id";
    
    if ($conexion->query($sql) === TRUE) {
        $mensaje = "Producto actualizado correctamente.";
        $exito = true;
    } else {
        $mensaje = "Error al actualizar el producto: " . $conexion->error;
        $exito = false;
    }
}

// Obtener los detalles del producto actual
$sql = "SELECT * FROM repuestos WHERE RepuestoID=$id";
$resultado = $conexion->query($sql);
$producto = $resultado->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Producto</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Editar Producto</h1>
        <form method="post" action="">
            <div class="form-group">
                <label for="nombre">Nombre del Producto:</label>
                <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $producto['NombreRepuesto']; ?>" required>
            </div>
            <div class="form-group">
                <label for="precio">Precio del Producto:</label>
                <input type="number" class="form-control" id="precio" name="precio" value="<?php echo $producto['PrecioUnitario']; ?>" required>
            </div>
            <div class="form-group">
                <label for="stock">Stock del Producto:</label>
                <input type="number" class="form-control" id="stock" name="stock" value="<?php echo $producto['CantidadStock']; ?>" required>
            </div>
            <button type="submit" class="btn btn-primary">Actualizar</button>
            <a href="../../paginas/mantenedores/repuestos.php" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>

    <?php if (isset($mensaje)): ?>
    <script>
        alert('<?php echo $mensaje; ?>');
        location.href = '../../paginas/mantenedores/repuestos.php';         
    </script>
    <?php endif; ?>
</body>
</html>

<?php
// Cerrar la conexión a la base de datos
$conexion->close();
?>
