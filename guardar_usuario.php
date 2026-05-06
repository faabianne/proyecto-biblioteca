<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

include("conexion.php");

// Recibir solo nombre y password
$usuario   = $_POST['usuario'];
$password = $_POST['password']; 

// Query ajustada sin la columna de correo
// Fíjate que ahora dice 'usuario' en lugar de 'nombre'
$sql = "INSERT INTO usuarios (usuario, password) VALUES ('$variable_user', '$variable_pass')";

if ($conexion->query($sql) === TRUE) {
    echo "Usuario registrado con éxito.";
    header("refresh:2;url=login.php");
} else {
    echo "Error al registrar: " . $conexion->error;
}

$conexion->close();
?>