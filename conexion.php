<?php
// conexion.php
$host = "127.0.0.1"; 
$user = "fescobar_db";
$pass = "12345678"; 
$db   = "fescobar_db";

// Conexión básica y segura
$conexion = new mysqli($host, $user, $pass, $db);

// Si hay error de conexión, lo muestra y detiene el código
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

// Configurar caracteres para ñ y acentos
$conexion->set_charset("utf8");
?>