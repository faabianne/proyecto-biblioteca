<?php session_start(); if(!isset($_SESSION['id_usuario'])) header("Location: ../
login.php"); ?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Alta Autor</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
rel="stylesheet">
<link rel="stylesheet" href="../wwwroot/css/estilos_biblioteca.css">
</head>
<body class="p-4">
<div class="container-form">
<h2 class="mb-4"> Nuevo Autor</h2>
<form action="guardar_autor.php" method="POST">
<div class="mb-3">
<label class="form-label">Nombre del Autor</label>
<input type="text" name="nombre" class="form-control" required
placeholder="Ej. Gabriel García Márquez">
</div>
<button type="submit" class="btn btn-biblioteca w-100">Guardar Autor</button>

<a href="../dashboard.php" class="btn btn-link w-100 mt-2 text-muted text-
decoration-none">Volver</a>

</form>
</div>
</body>
</html>