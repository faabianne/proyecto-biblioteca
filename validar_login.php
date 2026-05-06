<?php
include 'conexion.php';
// Iniciamos la sesión y la cookie de sesión
session_start();

$user = $_POST['usuario'];
$pass = $_POST['password'];

$sql = "SELECT * FROM usuarios WHERE usuario = '$user'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    // Verificamos el hash de la contraseña
    if (password_verify($pass, $row['password'])) {
        // Guardamos datos en la sesión (esto genera la cookie en el cliente)
        $_SESSION['usuario'] = $user;
        $_SESSION['id_usuario'] = $row['id'];
        $_SESSION['ultimo_acceso'] = date("Y-n-j H:i:s");

        header("Location: dashboard.php");
        exit();
    } else {
        echo "<script>alert('Contraseña incorrecta'); window.location='login.php';</script>";
    }
} else {
    echo "<script>alert('Usuario no encontrado'); window.location='login.php';</script>";
}
?>