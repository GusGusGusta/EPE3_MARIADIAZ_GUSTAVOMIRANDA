<?php
// Incluir archivo de conexión a la base de datos
include '../../php/conexion.php';

// Verificar si se proporcionó un ID de venta para buscar
if (isset($_GET['ventaID'])) {
    $ventaID = $_GET['ventaID'];

    // Consulta SQL para buscar la venta por ID
    $sql = "SELECT * FROM ventas WHERE VentaID = $ventaID";
    $resultado = $conexion->query($sql);

    // Verificar si se encontró la venta
    if ($resultado->num_rows > 0) {
        // Mostrar los detalles de la venta encontrada
        $venta = $resultado->fetch_assoc();
        echo "<h3>Detalles de la Venta</h3>";
        echo "<p>ID de Venta: " . $venta['VentaID'] . "</p>";
        echo "<p>Nombre del Repuesto: " . $venta['NombreRepuesto'] . "</p>";
        echo "<p>Cantidad Vendida: " . $venta['CantidadVendida'] . "</p>";
        echo "<p>Cliente: " . $venta['Cliente'] . "</p>";
        echo "<p>Fecha de Venta: " . $venta['FechaVenta'] . "</p>";
        echo "<p>Total: $" . $venta['Total'] . "</p>";
    } else {
        echo "No se encontró ninguna venta con el ID proporcionado.";
    }

    // Cerrar conexión a la base de datos
    $conexion->close();
}
?>
