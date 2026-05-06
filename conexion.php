<?php
// conexion.php
$host = "127.0.0.1"; 
$user = "fescobar_db";
$pass = "12345678"; 
$db   = "fescobar_db";

// Habilitar reporte de errores detallado
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

try {
    $conexion = new mysqli($host, $user, $pass, $db);
    $conexion->set_charset("utf8");
} catch (mysqli_sql_exception $e) {
    // Esto te dirá si el problema es la contraseña o el usuario
    die("Error crítico de conexión: " . $e->getMessage());
}
?>