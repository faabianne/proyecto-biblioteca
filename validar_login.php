<?php
include 'conexion.php';
session_start();

$user = $_POST['usuario'];
$pass = $_POST['password'];

$sql = "SELECT * FROM usuarios WHERE usuario = '$user'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    if (password_verify($pass, $row['password'])) {
        $_SESSION['usuario'] = $user;
        header("Location: dashboard.php");
    } else { echo "Password incorrecto"; }
} else { echo "Usuario no existe"; }
?>