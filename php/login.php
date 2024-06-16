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
// fin conexion

//index
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];


    $sql = "SELECT * FROM usuarios WHERE Correo='$email'";
    $result = $conexion->query($sql);
   
  //base_datos  
    while ($row = mysqli_fetch_array($result)){
        $correo = $row['Correo'];
        $pass = $row['Contraseña'];
        $tipo = $row['Tipo'];
    }

    if($email == $correo && $password == $pass){
        echo "Login exitoso. ¡Bienvenido!";
    
        if ($tipo == 'Administrador') {
            header('Location: http://localhost:8080/EPE3_MARIADIAZ_GUSTAVOMIRANDA/paginas/admin.html');
            exit();
        } else if ($tipo == 'Vendedor') {
            header('Location: http://localhost:8080/EPE3_MARIADIAZ_GUSTAVOMIRANDA/php/paginas/vendedor.html');
            exit();
        }    
        } else {
            header('Location: http://localhost:8080/EPE3_MARIADIAZ_GUSTAVOMIRANDA/php/paginas/general.html');
            exit();
        }
    } else {
        echo "Correo o contraseña incorrectos.";
    }

$conexion->close();
?>

