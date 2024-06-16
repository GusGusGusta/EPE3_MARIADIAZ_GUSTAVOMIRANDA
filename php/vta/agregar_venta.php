<?php
// Incluir archivo de conexión a la base de datos
include '../../php/conexion.php';

// Inicializar la variable de alerta
$alerta = "";

// Verificar si el formulario ha sido enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $nombreRepuesto = $_POST['nombre_repuesto'];
    $cantidadVendida = $_POST['cantidad_vendida'];
    $cliente = $_POST['cliente'];
    $fechaVenta = $_POST['fecha_venta'];
    $total = $_POST['total'];

    // Validar si el cliente existe en la base de datos antes de insertar la venta
    $sql_cliente = "SELECT * FROM clientes WHERE rut = '$cliente'";
    $resultado_cliente = $conexion->query($sql_cliente);

    if ($resultado_cliente && $resultado_cliente->num_rows > 0) {
        // El cliente existe, proceder con la inserción de la venta
        // Preparar consulta SQL para insertar la venta
        $sql = "INSERT INTO ventasrepuestos (NombreRepuesto, CantidadVendida, Cliente, FechaVenta, Total)
                VALUES ('$nombreRepuesto', $cantidadVendida, '$cliente', '$fechaVenta', $total)";

        if ($conexion->query($sql) === TRUE) {
            // Venta agregada correctamente
            $alerta = "<script>
                        if(confirm('Venta agregada correctamente. ¿Desea volver al panel del vendedor?')) {
                            window.location.href = '../../paginas/vendedor.php';
                        }
                      </script>";
        } else {
            // Error al agregar la venta
            $alerta = "<script>alert('Error al agregar la venta: " . $conexion->error . "');
                        window.location.href = '../../paginas/vendedor.php';</script>";
        }
    } else {
        // El cliente no existe
        $alerta = "<script>
                    alert('Error: El cliente \"$cliente\" no existe en la base de datos.');
                    window.location.href = '../../paginas/vendedor.php';

                </script>";
    }
}

// Cerrar conexión a la base de datos
$conexion->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alerta de Venta</title>
</head>
<body>
    <!-- Mostrar la alerta -->
    <?php echo $alerta; ?>

    <!-- Aquí puedes continuar con el resto de tu HTML si es necesario -->
</body>
</html>
