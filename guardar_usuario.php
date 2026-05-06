<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

include("conexion.php");

// 1. Recibir los datos del formulario
// Asegúrate que en tu HTML el <input> tenga name="usuario" y name="password"
$usuario  = $_POST['usuario'];
$password = $_POST['password']; 

// 2. La Query corregida con las variables correctas
// Usamos $usuario y $password que son las que definimos arriba
$sql = "INSERT INTO usuarios (usuario, password) VALUES ('$usuario', '$password')";

if ($conexion->query($sql) === TRUE) {
    echo "Usuario registrado con éxito.";
    header("refresh:2;url=login.php");
} else {
    echo "Error al registrar: " . $conexion->error;
}

$conexion->close();
?>