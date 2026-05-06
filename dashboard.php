<?php
session_name("CookieBiblioteca");
session_start();

// Verificación estricta de la cookie de sesión
if (!isset($_SESSION['usuario'])) {
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
        <p>Sesión activa: <strong><?php echo htmlspecialchars($_SESSION['usuario']); ?></strong></p>
        
        <nav>
            <a href="autores/alta_autor.php">Nuevo Autor</a>
            <a href="libros/alta_libro.php">Nuevo Libro</a>
            <a href="prestamos/alta_prestamo.php">Nuevo Préstamo</a>
            <br><br>
            <a href="logout.php" style="color: #e74c3c; font-weight: bold;">Cerrar Sesión</a>
        </nav>
    </div>
</body>
</html>