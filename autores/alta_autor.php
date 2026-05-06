<?php
include("conexion.php");

$nombre_autor = $_POST['nombre'];

// La tabla autores tiene: id, nombre
$sql = "INSERT INTO autores (nombre) VALUES ('$nombre_autor')";

if ($conexion->query($sql) === TRUE) {
    echo "Autor guardado.";
} else {
    echo "Error: " . $conexion->error;
}
?>