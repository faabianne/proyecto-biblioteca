<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

include("conexion.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre   = $_POST['nombre'];
    $password = $_POST['password'];

    // Validación basada en nombre y password
    $sql = "SELECT * FROM usuarios WHERE nombre = '$nombre' AND password = '$password'";
    $resultado = $conexion->query($sql);

    if ($resultado && $resultado->num_rows > 0) {
        echo "Bienvenido, acceso concedido.";
    } else {
        echo "Nombre de usuario o contraseña incorrectos.";
    }
} else {
    echo "Esperando datos...";
}

$conexion->close();
?>