<?php
// Conexión a la base de datos
$servidor = "localhost";
$user = "root";
$password = "";
$database = "taller";
$conexion = new mysqli($servidor, $user, $password, $database);
if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}

// Verificar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Consulta SQL para verificar las credenciales
    $sql = "SELECT * FROM usuarios WHERE Correo='$email'";
    $result = $conexion->query($sql);

    // Verificar si se encontró algún usuario con el correo proporcionado
    if ($result->num_rows > 0) {
        // Obtener los datos del usuario
        $row = $result->fetch_assoc();
        $correo = $row['Correo'];
        $pass = $row['Contraseña'];
        $tipo = $row['Tipo'];

        // Verificar la contraseña
        if ($password == $pass) {
            // Login exitoso, redirigir según el tipo de usuario
            echo "Login exitoso. ¡Bienvenido!";
            if ($tipo == 'Administrador') {
                header('Location: http://localhost:8080/EPE3_MARIADIAZ_GUSTAVOMIRANDA/paginas/admin.html');
                exit();
            } else if ($tipo == 'Vendedor') {
                header('Location: http://localhost:8080/EPE3_MARIADIAZ_GUSTAVOMIRANDA/paginas/vendedor.php');
                exit();
            } else {
                header('Location: http://localhost:8080/EPE3_MARIADIAZ_GUSTAVOMIRANDA/paginas/general.php');
                exit();
            }
        } else {
            // Contraseña incorrecta, mostrar mensaje de error
            header("Location: ../index.html?error=1");
            exit();
        }
    } else {
        // No se encontró un usuario con el correo proporcionado, mostrar mensaje de error
        header("Location: ../index.html?error=1");
        exit();
    }
}

// Cerrar conexión a la base de datos
$conexion->close();
?>
