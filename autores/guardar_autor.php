<?php
include '../conexion.php';
$nombre = $_POST['nombre'];
$sql = "INSERT INTO autores (nombre) VALUES ('$nombre')";
$conn->query($sql);
header("Location: ../dashboard.php");
?>