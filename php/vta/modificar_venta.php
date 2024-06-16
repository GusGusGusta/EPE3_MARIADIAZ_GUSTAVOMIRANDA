<?php
include '../conexion.php';

if (isset($_GET['id'])) {
    $venta_id = $_GET['id'];
    
    $sql = "SELECT * FROM ventasrepuestos WHERE VentaID = ?";
    $stmt = $conexion->prepare($sql);
    $stmt->bind_param('i', $venta_id);
    $stmt->execute();
    $resultado = $stmt->get_result();
    $venta = $resultado->fetch_assoc();
    
    $stmt->close();
    $conexion->close();
} else {
    echo "ID de venta no especificado.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Modificar Venta</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/estilo_admin.css">
</head>
<body>
    <div class="container">
        <h2>Modificar Venta</h2>
        <form action="actualizar_venta.php" method="POST">
            <input type="hidden" name="venta_id" value="<?php echo $venta['VentaID']; ?>">
            <div class="form-group">
                <label for="nombre_repuesto">Nombre Repuesto</label>
                <input type="text" id="nombre_repuesto" name="nombre_repuesto" class="form-control" value="<?php echo $venta['NombreRepuesto']; ?>" required>
            </div>
            <div class="form-group">
                <label for="cantidad_vendida">Cantidad Vendida</label>
                <input type="number" id="cantidad_vendida" name="cantidad_vendida" class="form-control" value="<?php echo $venta['CantidadVendida']; ?>" required>
            </div>
            <div class="form-group">
                <label for="cliente">Cliente</label>
                <input type="text" id="cliente" name="cliente" class="form-control" value="<?php echo $venta['Cliente']; ?>" required>
            </div>
            <div class="form-group">
                <label for="fecha_venta">Fecha Venta</label>
                <input type="date" id="fecha_venta" name="fecha_venta" class="form-control" value="<?php echo $venta['FechaVenta']; ?>" required>
            </div>
            <div class="form-group">
                <label for="total">Total</label>
                <input type="number" id="total" name="total" class="form-control" step="0.01" value="<?php echo $venta['Total']; ?>" required>
            </div>
            <button type="submit" class="btn btn-primary">Actualizar Venta</button>
        </form>
    </div>
</body>
</html>
