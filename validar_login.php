<?php
// validar_login.php
include("conexion.php");

$usuario_form = $_POST['usuario'];
$password_form = $_POST['password'];

// Buscamos al usuario (se asume id_usuario en tabla)
$sql = "SELECT id_usuario, usuario, password FROM usuarios WHERE usuario = '$usuario_form'";
$resultado = $conexion->query($sql);

if ($resultado->num_rows > 0) {
    $fila = $resultado->fetch_assoc();
    
    // Verificación de contraseña (ajusta a password_verify si usas hash)
    if ($password_form == $fila['password']) {
        session_start();
        $_SESSION['usuario'] = $fila['usuario'];
        $_SESSION['id_usuario'] = $fila['id_usuario'];

        // --- CREACIÓN DE COOKIE POR 30 DÍAS (Imagen 1/3) ---
        $cookie_name = "id_usuario";
        $cookie_value = $fila['id_usuario'];
        $expiry = time() + (86400 * 30); 
        setcookie($cookie_name, $cookie_value, $expiry, "/");

        header("Location: dashboard.php");
    } else {
        echo "<script>alert('Contraseña incorrecta'); window.location='login.php';</script>";
    }
} else {
    echo "<script>alert('Usuario no encontrado'); window.location='login.php';</script>";
}
?>