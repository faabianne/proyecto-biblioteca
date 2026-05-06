<?php session_start(); include("../conexion.php"); if(!isset($_SESSION['id_usuario']))
header("Location: ../login.php"); ?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Registrar Préstamo</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
rel="stylesheet">
<link rel="stylesheet" href="../wwwroot/css/estilos_biblioteca.css">
</head>
<body class="p-4">

<div class="container-form">
<h2 class="mb-4"> Registrar Préstamo</h2>
<form action="guardar_prestamo.php" method="POST">
<div class="mb-3">
<label class="form-label">Libro</label>
<select name="id_libro" class="form-select" required>
<?php
$res = $conexion->query("SELECT * FROM libros");
while($row = $res->fetch_assoc()){
echo "<option value='".$row['id']."'>".$row['titulo']."</
option>";
}
?>
</select>
</div>
<div class="mb-3">
<label class="form-label">Nombre del Lector</label>
<input type="text" name="usuario" class="form-control" required
placeholder="Nombre de quien recibe">
</div>
<div class="mb-3">
<label class="form-label">Fecha</label>
<input type="date" name="fecha" class="form-control" required value="<?
php echo date('Y-m-d'); ?>">
</div>
<button type="submit" class="btn btn-biblioteca w-100">Registrar</button>

<a href="../dashboard.php" class="btn btn-link w-100 mt-2 text-muted text-
decoration-none">Volver</a>

</form>
</div>
</body>
</html>