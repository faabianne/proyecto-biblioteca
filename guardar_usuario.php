<?php
include 'conexion.php';
$user = $_POST['usuario'];
$pass = password_hash($_POST['password'], PASSWORD_DEFAULT);

$sql = "INSERT INTO usuarios (usuario, password) VALUES ('$user', '$pass')";
if ($conn->query($sql) === TRUE) {
    header("Location: login.php");
}
?>