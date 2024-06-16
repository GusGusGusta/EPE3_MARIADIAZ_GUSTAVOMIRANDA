<?php
include '../conexion.php';

if (isset($_GET['id'])) {
    $venta_id = $_GET['id'];
    
    $sql = "DELETE FROM ventasrepuestos WHERE VentaID = ?";
    $stmt = $conexion->prepare($sql);
    $stmt->bind_param('i', $venta_id);
    
    if ($stmt->execute()) {
        echo "Venta eliminada exitosamente.";
    } else {
        echo "Error al eliminar la venta: " . $conexion->error;
    }

    $stmt->close();
    $conexion->close();
    
    // Redirigir a la página principal de ventas
    header("Location: ../../aginas/vendedor.php");
} else {
    echo "ID de venta no especificado.";
}
?>
