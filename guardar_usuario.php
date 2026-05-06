<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

include("conexion.php");

// Recibir solo nombre y password
$nombre   = $_POST['nombre'];
$password = $_POST['password']; 

// Query ajustada sin la columna de correo
$sql = "INSERT INTO usuarios (nombre, password) VALUES ('$nombre', '$password')";

if ($conexion->query($sql) === TRUE) {
    echo "Usuario registrado con éxito.";
    header("refresh:2;url=login.php");
} else {
    echo "Error al registrar: " . $conexion->error;
}

$conexion->close();
?>