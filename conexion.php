<?php
$host = "localhost";
$user = "fescobar_db";
$pass = "12345678";
$db   = "fescobar_db";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
?>