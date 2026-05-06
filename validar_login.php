<?php
session_start();
include("conexion.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$nombre = $_POST['nombre'];
$password = $_POST['password'];
$sql = "SELECT * FROM usuarios WHERE nombre = '$nombre' AND password = '$password'";
$resultado = $conexion->query($sql);
if ($resultado && $resultado->num_rows > 0) {
$_SESSION['id_usuario'] = $nombre;
setcookie("id_usuario", $nombre, time() + (86400 * 30), "/");
header("Location: dashboard.php");
} else {
echo "<script>alert('Usuario o contraseña incorrectos');
window.location='login.php';</script>";
}
}
$conexion->close();
?>