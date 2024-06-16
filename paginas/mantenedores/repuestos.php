<?php
// Incluir código PHP para conexión y consulta de productos
include '../../php/conexion.php'; // Asegúrate de ajustar la ruta según tu estructura de carpetas
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/estilo_admin.css"> <!-- Ajusta la ruta de tu archivo CSS -->
</head>
<body>
    <div class="header">
        <h1>MANTENEDOR DE PRODUCTOS</h1>
    </div>
    <div class="wrapper">
        <nav class="sidebar">
            <h2>Navegacion</h2>
            <a href="../admin.html"><i class="fas fa-home"></i> Inicio</a> <!-- Ajusta la ruta de tu página de inicio -->
            <a href="../index.html" class="btn btn-danger btn-sm" style="margin-top: 10px;">Cerrar Sesión</a>
        </nav> 
        <div class="main-content">
            <!-- Formulario para agregar nuevo repuesto -->
            <div class="formulario-nuevo-repuesto">
                <h2>Agregar Nuevo Repuesto</h2>
                <form action="../../php/pro/agregar_producto.php" method="post">
                    <div class="form-group">
                        <label for="nombreRepuesto">Nombre del Repuesto:</label>
                        <input type="text" id="nombreRepuesto" name="nombreRepuesto" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="precioUnitario">Precio Unitario:</label>
                        <input type="number" id="precioUnitario" name="precioUnitario" class="form-control" step="0.01" required>
                    </div>
                    <div class="form-group">
                        <label for="cantidadStock">Cantidad en Stock:</label>
                        <input type="number" id="cantidadStock" name="cantidadStock" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Agregar Repuesto</button>
                </form>
            </div>

            <?php
            // Mostrar alerta si existe un mensaje de alerta
            if (isset($_GET['alert_message'])) {
                echo '<div class="alert alert-success alert-dismissible fade show" role="alert">';
                echo $_GET['alert_message'];
                echo '<button type="button" class="close" data-dismiss="alert" aria-label="Close">';
                echo '<span aria-hidden="true">&times;</span>';
                echo '</button>';
                echo '</div>';
            }
            ?>

            <hr> <!-- Línea separadora opcional -->

            <?php
            // Aquí va el código PHP para la consulta de productos
            $sql = "SELECT * FROM repuestos";
            $resultado = $conexion->query($sql);

            // Verificar si hay resultados
            if ($resultado->num_rows > 0) {
                echo '<h2>Productos</h2>';
                echo '<table class="table">';
                echo '<thead><tr><th>Nombre</th><th>Precio</th><th>Stock</th><th>Acciones</th></tr></thead>';
                echo '<tbody>';

                // Mostrar cada producto en una tabla
                while ($fila = $resultado->fetch_assoc()) {
                    echo '<tr>';
                    echo '<td>' . $fila['NombreRepuesto'] . '</td>';
                    echo '<td>' . $fila['PrecioUnitario'] . '</td>';
                    echo '<td>' . $fila['CantidadStock'] . '</td>';
                    echo '<td>';
                    echo '<a href="../../php/pro/editar_producto.php?id=' . $fila['RepuestoID'] . '" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i> Editar</a> ';
                    echo '<a href="../../php/pro/eliminar_producto.php?id=' . $fila['RepuestoID'] . '" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Eliminar</a>';
                    echo '</td>';
                    echo '</tr>';
                }

                echo '</tbody>';
                echo '</table>';
            } else {
                echo "No se encontraron productos.";
            }

            // Cerrar la conexión a la base de datos
            $conexion->close();
            ?>
        </div>           
    </div>
    <div class="footer">
        &copy; 2024 Taller Rayido Mcqueen
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
