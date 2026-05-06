<?php
include 'conexion.php';

// Cambiamos el nombre de la cookie antes de iniciar la sesión
session_name("CookieBiblioteca");
session_start();

$user = $_POST['usuario'];
$pass = $_POST['password'];

$sql = "SELECT * FROM usuarios WHERE usuario = '$user'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    if (password_verify($pass, $row['password'])) {
        // Guardamos los datos en la sesión
        $_SESSION['usuario'] = $user;
        $_SESSION['id_usuario'] = $row['id'];
        $_SESSION['ultimo_acceso'] = date("Y-m-d H:i:s");

        header("Location: dashboard.php");
        exit();
    } else {
        echo "<script>alert('Contraseña incorrecta'); window.location='login.php';</script>";
    }
} else {
    echo "<script>alert('Usuario no encontrado'); window.location='login.php';</script>";
}
?>