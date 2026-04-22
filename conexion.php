<?php
$conexion = new mysqli("localhost", "fescobar_db", "", "fescobar_db");

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}
?>