<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: login.php");
}
?>

<!DOCTYPE html>
<html>
<body>

<h2>Bienvenido <?php echo $_SESSION['usuario']; ?></h2>

<a href="autores/alta_autor.php">Alta Autor</a><br>
<a href="libros/alta_libro.php">Alta Libro</a><br>
<a href="prestamos/alta_prestamo.php">Registrar Préstamo</a><br>
<a href="logout.php">Cerrar sesión</a>

</body>
</html>