<?php
// Verificar si hay una alerta para mostrar
$alerta = isset($_GET['alerta']) ? $_GET['alerta'] : '';

// Función para mostrar la alerta en JavaScript
function mostrarAlerta($mensaje) {
    echo "<script>alert('$mensaje');</script>";
}

// Mostrar la alerta si existe
if (!empty($alerta)) {
    mostrarAlerta($alerta);
}
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
        <h1>MANTENEDOR DE USUARIOS</h1>
    </div>
    <div class="wrapper">
        <nav class="sidebar">
            <h2>Navegacion</h2>
            <a href="../admin.html"><i class="fas fa-home"></i> Inicio</a> <!-- Ajusta la ruta de tu página de inicio -->
            <a href="../../index.html" class="btn btn-danger btn-sm" style="margin-top: 10px;">Cerrar Sesión</a>
        </nav> 
        <div class="main-content">
            <div class="new-user">
                <h2>Nuevo Usuario</h2>
                <form action="../../php/usu/agregar_usuario.php" method="POST">
                    <div class="form-group">
                        <label for="rut">Run (Rol Unico Nacional)</label>
                        <input type="text" id="rut" name="rut" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="correo">Correo</label>
                        <input type="email" id="correo" name="correo" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="contrasena">Contraseña</label>
                        <input type="password" id="contrasena" name="contrasena" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="tipo">Tipo</label>
                        <select id="tipo" name="tipo" class="form-control" required>
                            <option value="Administrador">Administrador</option>
                            <option value="vendedor">Vendedor</option>
                            <option value="Mecanico">Mecanico</option>
                            <option value="Gerente">Gerente</option>
                            <option value="Otro">Otro</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Agregar Usuario</button>
                </form>
            </div>

            <hr>

            <?php
            // Incluir código PHP para conexión y consulta de usuarios
            include '../../php/conexion.php'; // Asegúrate de ajustar la ruta según tu estructura de carpetas
            ?>

            <?php
            // Aquí va el código PHP para la consulta de usuarios
            $sql = "SELECT * FROM usuarios";
            $resultado = $conexion->query($sql);

            // Verificar si hay resultados
            if ($resultado->num_rows > 0) {
                echo '<h2>Usuarios</h2>';
                echo '<table class="table">';
                echo '<thead><tr><th>Rut</th><th>Correo</th><th>Contraseña</th><th>Tipo</th><th>Acciones</th></tr></thead>';
                echo '<tbody>';

                // Mostrar cada usuario en una tabla
                while ($fila = $resultado->fetch_assoc()) {
                    echo '<tr>';
                    echo '<td>' . $fila['Rut'] . '</td>';
                    echo '<td>' . $fila['Correo'] . '</td>';
                    echo '<td>' . $fila['Contraseña'] . '</td>';
                    echo '<td>' . $fila['Tipo'] . '</td>';
                    echo '<td>';
                    echo '<a href="../../php/usu/editar_usuario.php?id=' . $fila['Rut'] . '" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i> Editar</a> ';
                    echo '<a href="../../php/usu/eliminar_usuario.php?id=' . $fila['Rut'] . '" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Eliminar</a>';
                    echo '</td>';
                    echo '</tr>';
                }

                echo '</tbody>';
                echo '</table>';
            } else {
                echo "No se encontraron usuarios.";
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
