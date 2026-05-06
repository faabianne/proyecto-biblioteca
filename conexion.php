<?php
// conexion.php
$host = "127.0.0.1"; 
$user = "fescobar_db";
$pass = "12345678"; 
$db   = "fescobar_db";

$conexion = new mysqli($host, $user, $pass, $db);

if ($conexion->connect_error) {
    // Si sale esto, el problema sigue siendo de permisos del maestro
    die("Error de conexión: " . $conexion->connect_error);
}

// Si la pantalla salía blanca, es porque llegaba aquí. 
// Vamos a imprimir algo para estar seguros:
echo "Conexión establecida correctamente a la base de datos.";
$conexion->set_charset("utf8");
?>