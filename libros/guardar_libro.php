<?php
include("../conexion.php");

$titulo = $_POST['titulo'];
$id_autor = $_POST['id_autor'];

$sql = "INSERT INTO libros (titulo,id_autor) VALUES ('$titulo','$id_autor')";
$conexion->query($sql);

echo "Libro guardado <br><a href='../dashboard.php'>Volver</a>";
?>