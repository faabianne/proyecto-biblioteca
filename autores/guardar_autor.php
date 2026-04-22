<?php
include("../conexion.php");

$nombre = $_POST['nombre'];

$sql = "INSERT INTO autores (nombre) VALUES ('$nombre')";
$conexion->query($sql);

echo "Autor guardado <br><a href='../dashboard.php'>Volver</a>";
?>