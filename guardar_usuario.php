<?php
include("conexion.php");

$usuario = $_POST['usuario'];
$password = $_POST['password'];

$sql = "INSERT INTO usuarios (usuario, password) VALUES ('$usuario','$password')";
$conexion->query($sql);

header("Location: login.php");
?>