<?php
// Iniciamos la sesión para proteger la página
session_start();

// Si el usuario no ha iniciado sesión, lo mandamos de vuelta al login
if (!isset($_SESSION['usuario'])) {
    header("Location: login.php");
    exit();
}

include 'conexion.php'; // Incluimos la conexión por si deseas mostrar estadísticas después
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Proyecto Biblioteca</title>
    <!-- Enlace al archivo de estilos que creamos -->
    <link rel="stylesheet" href="wwwroot/css/estilos_biblioteca.css">
</head>
<body>

    <div class="dashboard-container">
        <h1>Sistema de Gestión de Biblioteca</h1>
        
        <div class="user-info">
            <p>Bienvenido(a), <strong><?php echo htmlspecialchars($_SESSION['usuario']); ?></strong></p>
        </div>

        <nav>
            <div class="menu-section">
                <h3>Administración</h3>
                <!-- Rutas basadas en la estructura de carpetas de tu imagen -->
                <a href="autores/alta_autor.php">Registrar Autor</a>
                <a href="libros/alta_libro.php">Registrar Libro</a>
                <a href="prestamos/alta_prestamo.php">Nuevo Préstamo</a>
            </div>

            <div class="menu-section" style="margin-top: 20px;">
                <a href="logout.php" class="logout-btn">Cerrar Sesión</a>
            </div>
        </nav>
    </div>

</body>
</html>