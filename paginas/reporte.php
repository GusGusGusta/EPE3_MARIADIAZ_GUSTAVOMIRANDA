<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/estilo_admin.css"> <!-- Ajusta la ruta de tu archivo CSS -->
    <style>
        .table-title {
            background-color: #28a745; /* Color de fondo verde */
            color: white; /* Texto blanco */
            padding: 10px; /* Espaciado interno */
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>PERFIL GENERAL</h1>
    </div>
    <div class="wrapper">
        <nav class="sidebar">
            <h2>Navegacion</h2>
            <a href="../paginas/admin.html"><i class="fas fa-home"></i> Inicio</a> <!-- Ajusta la ruta de tu página de inicio -->
            <a href="../index.html" class="btn btn-danger btn-sm" style="margin-top: 10px;">Cerrar Sesión</a>
        </nav> 
        <div class="main-content">
            <?php
            // Incluir código PHP para conexión
            include '../php/conexion.php'; // Asegúrate de ajustar la ruta según tu estructura de carpetas

            // Definir las tablas y sus nombres para los reportes
            $tablas = array(
                'clientes' => 'Clientes',
                'compania' => 'Compañía',
                'empleados' => 'Empleados',
                'garantiasrepuestos' => 'Garantías de Repuestos',
                'repuestos' => 'Repuestos',
                'repuestossolicitud' => 'Repuestos de Solicitud',
                'siniestro' => 'Siniestros',
                'solicitudesservicio' => 'Solicitudes de Servicio',
                'vehiculos' => 'Vehículos'
            );

            // Mostrar reportes para cada tabla
            foreach ($tablas as $nombreTabla => $nombreMostrar) {
                echo '<h2 class="table-title">' . $nombreMostrar . '</h2>';
                echo '<table class="table">';
                echo '<thead><tr>';

                // Obtener nombres de columnas
                $sql = "SHOW COLUMNS FROM $nombreTabla";
                $result = $conexion->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo '<th>' . $row['Field'] . '</th>';
                    }
                    echo '</tr></thead>';
                    echo '<tbody>';

                    // Mostrar datos de la tabla
                    $sql_data = "SELECT * FROM $nombreTabla";
                    $data_result = $conexion->query($sql_data);

                    if ($data_result->num_rows > 0) {
                        while ($fila = $data_result->fetch_assoc()) {
                            echo '<tr>';
                            foreach ($fila as $valor) {
                                echo '<td>' . $valor . '</td>';
                            }
                            echo '</tr>';
                        }
                    } else {
                        echo '<tr><td colspan="' . $result->num_rows . '">No hay datos disponibles</td></tr>';
                    }
                    echo '</tbody>';
                    echo '</table>';
                } else {
                    echo '<p>No se encontraron columnas para la tabla ' . $nombreTabla . '</p>';
                }
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
