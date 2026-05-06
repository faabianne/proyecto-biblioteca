<?php
include("conexion.php");

$titulo   = $_POST['titulo'];
$id_autor = $_POST['id_autor']; // Este ID debe existir en la tabla autores

$sql = "INSERT INTO libros (titulo, id_autor) VALUES ('$titulo', '$id_autor')";

if ($conexion->query($sql) === TRUE) {
    echo "Libro registrado.";
} else {
    echo "Error: " . $conexion->error;
}
?>