<?php
include '../conexion.php';

if (isset($_POST['venta_id'])) {
    $venta_id = $_POST['venta_id'];
    $nombre_repuesto = $_POST['nombre_repuesto'];
    $cantidad_vendida = $_POST['cantidad_vendida'];
    $cliente = $_POST['cliente'];
    $fecha_venta = $_POST['fecha_venta'];
    $total = $_POST['total'];

    $sql = "UPDATE ventasrepuestos SET NombreRepuesto = ?, CantidadVendida = ?, Cliente = ?, FechaVenta = ?, Total = ? WHERE VentaID = ?";
    $stmt = $conexion->prepare($sql);
    $stmt->bind_param('sissdi', $nombre_repuesto, $cantidad_vendida, $cliente, $fecha_venta, $total, $venta_id);

    if ($stmt->execute()) {
        echo "Venta actualizada exitosamente.";
    } else {
        echo "Error al actualizar la venta: " . $conexion->error;
    }

    $stmt->close();
    $conexion->close();
    
    // Redirigir a la página principal de ventas
    header("Location: ../../paginas/vendedor.php");
} else {
    echo "Datos incompletos.";
}
?>
