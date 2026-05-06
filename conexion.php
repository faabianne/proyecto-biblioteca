<?php
// conexion.php
// Prueba con 127.0.0.1 si localhost falla
$conexion = new mysqli("127.0.0.1", "fescobar_db", 'fabian$2005$', "fescobar_db");

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}
?>