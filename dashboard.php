<?php
session_start();
if (!isset($_SESSION['id_usuario']) && isset($_COOKIE["id_usuario"])) {

$_SESSION['id_usuario'] = $_COOKIE["id_usuario"];
}
if (!isset($_SESSION['id_usuario'])) {
header("Location: login.php");
exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Panel de Biblioteca</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
rel="stylesheet">
<link rel="stylesheet" href="wwwroot/css/estilos_biblioteca.css">
</head>
<body>
<nav class="navbar navbar-biblioteca navbar-dark p-3">
<div class="container-fluid">
<span class="navbar-brand mb-0 h1"> Panel Bibliotecario</span>
<a href="logout.php" class="btn btn-outline-light btn-sm">Cerrar Sesión</a>
</div>
</nav>
<div class="container mt-5">

<div class="bg-white p-5 rounded-4 shadow-sm mb-5 border-start border-5 border-
warning">

<h2 class="display-6">Bienvenido, <?php echo $_SESSION['id_usuario']; ?></h2>
<p class="text-muted">Gestiona el catálogo de autores, libros y préstamos.</
p>
</div>
<div class="row g-4">
<div class="col-md-4">
<a href="autores/alta_autor.php" class="nav-card">
<h4> Autores</h4>
<p class="small text-muted mb-0">Registrar nuevos escritores.</p>
</a>
</div>
<div class="col-md-4">
<a href="libros/alta_libro.php" class="nav-card">
<h4> Libros</h4>
<p class="small text-muted mb-0">Añadir títulos al catálogo.</p>
</a>
</div>
<div class="col-md-4">
<a href="prestamos/alta_prestamo.php" class="nav-card">
<h4> Préstamos</h4>
<p class="small text-muted mb-0">Control de entregas.</p>
</a>
</div>
</div>
</div>
</body>
</html>