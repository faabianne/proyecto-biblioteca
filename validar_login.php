<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

include("conexion.php");

$user = $_POST['usuario'];
$pass = $_POST['password'];

// SELECT corregido para coincidir con la tabla 'usuarios'
$sql = "SELECT * FROM usuarios WHERE usuario = '$user' AND password = '$pass'";
$resultado = $conexion->query($sql);

if ($resultado->num_rows > 0) {
    echo "Acceso concedido. Bienvenido.";
    header("refresh:2;url=index.php"); 
} else {
    echo "Error: Usuario o contraseña incorrectos.";
    header("refresh:2;url=login.php");
}

$conexion->close();
?>