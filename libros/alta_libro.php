<?php session_start(); include("../conexion.php"); if(!isset($_SESSION['id_usuario']))
header("Location: ../login.php"); ?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Alta Libro</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
rel="stylesheet">
<link rel="stylesheet" href="../wwwroot/css/estilos_biblioteca.css">
</head>
<body class="p-4">
<div class="container-form">
<h2 class="mb-4"> Nuevo Libro</h2>
<form action="guardar_libro.php" method="POST">
<div class="mb-3">
<label class="form-label">Título</label>
<input type="text" name="titulo" class="form-control" required
placeholder="Ej. Cien años de soledad">
</div>
<div class="mb-3">
<label class="form-label">Autor</label>
<select name="id_autor" class="form-select" required>
<?php
$res = $conexion->query("SELECT * FROM autores");
while($row = $res->fetch_assoc()){
echo "<option value='".$row['id']."'>".$row['nombre']."</
option>";
}
?>
</select>
</div>
<button type="submit" class="btn btn-biblioteca w-100">Guardar Libro</button>

<a href="../dashboard.php" class="btn btn-link w-100 mt-2 text-muted text-
decoration-none">Volver</a>

</form>
</div>
</body>
</html>