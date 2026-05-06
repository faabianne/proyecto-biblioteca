<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

include("conexion.php");

// Recibir datos del formulario
$usuario  = $_POST['usuario'];
$password = $_POST['password']; 

// INSERT corregido: usamos 'usuario' porque 'nombre' no existe
$sql = "INSERT INTO usuarios (usuario, password) VALUES ('$usuario', '$password')";

if ($conexion->query($sql) === TRUE) {
    echo "Usuario registrado con éxito.";
    header("refresh:2;url=login.php");
} else {
    echo "Error al registrar: " . $conexion->error;
}

$conexion->close();
?>