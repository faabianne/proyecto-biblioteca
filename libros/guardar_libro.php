<?php
include '../conexion.php';
$titulo = $_POST['titulo'];
$id_autor = $_POST['id_autor'];
$sql = "INSERT INTO libros (titulo, id_autor) VALUES ('$titulo', '$id_autor')";
$conn->query($sql);
header("Location: ../dashboard.php");
?>