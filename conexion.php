<?php
$host = "127.0.0.1";
$user = "fescobar_db";
$pass = "12345678";
$db = "fescobar_db";
$conexion = new mysqli($host, $user, $pass, $db);
if ($conexion->connect_error) {
die("Error de conexión: " . $conexion->connect_error);
}
$conexion->set_charset("utf8");
?>