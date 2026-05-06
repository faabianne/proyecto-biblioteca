<?php
// Activar reporte de errores para depuración
ini_set('display_errors', 1);
error_reporting(E_ALL);

include("conexion.php");

// Recibir datos del formulario (ajusta los nombres según tu HTML)
$nombre   = $_POST['nombre'];
$correo   = $_POST['correo'];
$password = $_POST['password']; 

// Query para insertar (Asegúrate de que tu tabla se llame 'usuarios')
$sql = "INSERT INTO usuarios (nombre, correo, password) VALUES ('$nombre', '$correo', '$password')";

if ($conexion->query($sql) === TRUE) {
    echo "Usuario registrado con éxito.";
    // Opcional: Redirigir al login después de 2 segundos
    header("refresh:2;url=login.php");
} else {
    echo "Error al registrar: " . $conexion->error;
}

$conexion->close();
?>