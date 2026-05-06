<?php
// Siempre debe ser la primera línea para leer la cookie de sesión
session_start();

// Verificamos si la variable de sesión existe
if (!isset($_SESSION['usuario'])) {
    // Si no hay sesión activa, destruimos cualquier rastro y mandamos al login
    session_unset();
    session_destroy();
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Dashboard - Biblioteca</title>
    <link rel="stylesheet" href="wwwroot/css/estilos_biblioteca.css">
</head>
<body>
    <div style="text-align: center;">
        <h1>Panel de Control</h1>
        <p>Sesión iniciada como: <strong><?php echo htmlspecialchars($_SESSION['usuario']); ?></strong></p>
        <p><small>Conectado desde: <?php echo $_SESSION['ultimo_acceso']; ?></small></p>
        
        <nav>
            <a href="autores/alta_autor.php">Nuevo Autor</a>
            <a href="libros/alta_libro.php">Nuevo Libro</a>
            <a href="prestamos/alta_prestamo.php">Nuevo Préstamo</a>
            <br><br>
            <a href="logout.php" style="color: #e74c3c; font-weight: bold;">Cerrar Sesión Segura</a>
        </nav>
    </div>
</body>
</html>