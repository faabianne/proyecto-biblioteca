<?php
// conexion.php
// 1. Prueba con 127.0.0.1 en lugar de localhost para evitar bloqueos de socket
$host = "127.0.0.1"; 
$user = "fescobar_db";
$pass = ""; 
$db   = "fescobar_db";

// Reporte de errores para saber exactamente qué falla
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

try {
    $conexion = new mysqli($host, $user, $pass, $db);
    $conexion->set_charset("utf8");
} catch (mysqli_sql_exception $e) {
    // Si esto falla, el usuario o contraseña están mal en el servidor
    die("Error crítico de conexión: " . $e->getMessage());
}
?>