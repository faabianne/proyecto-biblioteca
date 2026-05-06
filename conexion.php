<?php
// conexion.php
// Usamos 127.0.0.1 para asegurar la conexión en el servidor real
$host = "127.0.0.1";
$user = "fescobar_db";
$pass = "12345678"; // Asegúrate de que coincida con la que pusiste en el servidor
$db   = "fescobar_db";

$conexion = new mysqli($host, $user, $pass, $db);

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}
?>
