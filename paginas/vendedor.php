<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Ventas</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/estilo_admin.css"> <!-- Ajusta la ruta de tu archivo CSS -->
</head>
<body>
    <div class="header">
        <h1>VENDEDOR</h1>
    </div>
    <div class="wrapper">
        <nav class="sidebar">
            <h2>Navegación</h2>
            <a href="../paginas/vendedor.php"><i class="fas fa-home"></i> Inicio</a> <!-- Ajusta la ruta de tu página de inicio -->
            <a href="../paginas/reporte_ven.php"><i class="fas fa-chart-bar"></i> Reportes</a>
            <a href="../index.html" class="btn btn-danger btn-sm" style="margin-top: 10px;">Cerrar Sesión</a>
        </nav> 
        <div class="main-content">
            <div class="new-sale">
                <h2>Nueva Venta</h2>
                <form action="../php/vta/agregar_venta.php" method="POST">
                    <div class="form-group">
                        <label for="nombre_repuesto">Nombre Repuesto</label>
                        <input type="text" id="nombre_repuesto" name="nombre_repuesto" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="cantidad_vendida">Cantidad Vendida</label>
                        <input type="number" id="cantidad_vendida" name="cantidad_vendida" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="cliente">Cliente</label>
                        <input type="text" id="cliente" name="cliente" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="fecha_venta">Fecha Venta</label>
                        <input type="date" id="fecha_venta" name="fecha_venta" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="total">Total</label>
                        <input type="number" id="total" name="total" class="form-control" step="0.01" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Registrar Venta</button>
                </form>
            </div>

            <hr>

            <?php
            // Incluir código PHP para conexión y consulta de ventas
            include '../php/conexion.php'; // Asegúrate de ajustar la ruta según tu estructura de carpetas
            ?>

            <?php
            // Aquí va el código PHP para la consulta de ventas
            $sql = "SELECT * FROM ventasrepuestos";
            $resultado = $conexion->query($sql);

            // Verificar si hay resultados
            if ($resultado->num_rows > 0) {
                echo '<h2>Listado de Ventas</h2>';
                echo '<table class="table">';
                echo '<thead><tr><th>Venta ID</th><th>Nombre Repuesto</th><th>Cantidad Vendida</th><th>Cliente</th><th>Fecha Venta</th><th>Total</th></tr></thead>';
                echo '<tbody>';

                // Mostrar cada venta en una tabla
                while ($fila = $resultado->fetch_assoc()) {
                    echo '<tr>';
                    echo '<td>' . $fila['VentaID'] . '</td>';
                    echo '<td>' . $fila['NombreRepuesto'] . '</td>';
                    echo '<td>' . $fila['CantidadVendida'] . '</td>';
                    echo '<td>' . $fila['Cliente'] . '</td>';
                    echo '<td>' . $fila['FechaVenta'] . '</td>';
                    echo '<td>' . $fila['Total'] . '</td>';
                    echo '</tr>';
                }

                echo '</tbody>';
                echo '</table>';
            } else {
                echo "No se encontraron ventas.";
            }

            // Cerrar la conexión a la base de datos
            $conexion->close();
            ?>
        </div>           
    </div>
    <div class="footer">
        &copy; 2024 Taller Rayido Mcqueen
    </div>
</body>
</html>
