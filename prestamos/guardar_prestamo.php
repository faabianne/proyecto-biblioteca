<?php
include("../conexion.php");

$id_libro = $_POST['id_libro'];
$usuario = $_POST['usuario'];
$fecha = $_POST['fecha'];

$sql = "INSERT INTO prestamos (id_libro,usuario,fecha) VALUES ('$id_libro','$usuario','$fecha')";
$conexion->query($sql);

echo "Préstamo registrado <br><a href='../dashboard.php'>Volver</a>";
?>