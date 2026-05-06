<?php
session_start();
if (!isset($_SESSION['usuario'])) { header("Location: login.php"); }
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="wwwroot/css/estilos_biblioteca.css">
    <title>Panel Biblioteca</title>
</head>
<body>
    <h1>Bienvenido, <?php echo $_SESSION['usuario']; ?></h1>
    <nav>
        <a href="autores/alta_autor.php">Nuevo Autor</a> |
        <a href="libros/alta_libro.php">Nuevo Libro</a> |
        <a href="prestamos/alta_prestamo.php">Nuevo Préstamo</a> |
        <a href="logout.php">Salir</a>
    </nav>
</body>
</html>