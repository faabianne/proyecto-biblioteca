<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

error_reporting(E_ALL);
ini_set('display_errors', 1);

include("conexion.php");

$usuario = $_POST['usuario'];
$password = $_POST['password'];

$sql = "INSERT INTO usuarios (usuario, password) VALUES ('$usuario','$password')";

if ($conexion->query($sql) === TRUE) {
    header("Location: login.php");
} else {
    echo "Error: " . $conexion->error;
}
?>