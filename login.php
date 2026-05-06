<?php
session_start();
if (isset($_COOKIE['id_usuario'])) {
$_SESSION['id_usuario'] = $_COOKIE['id_usuario'];
header("Location: dashboard.php");
exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Biblioteca - Iniciar Sesión</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
rel="stylesheet">
<link rel="stylesheet" href="wwwroot/css/estilos_biblioteca.css">
</head>
<body>
<div class="container d-flex justify-content-center align-items-center vh-100">
<div class="card biblioteca-card" style="width: 100%; max-width: 400px;">
<div class="biblioteca-header">
<h2 class="mb-0"> Mi Biblioteca</h2>
</div>
<div class="card-body p-4">

<form action="validar_login.php" method="POST">
<div class="mb-3">
<label class="form-label small fw-bold">Usuario</label>
<input type="text" name="nombre" class="form-control" required
placeholder="Tu usuario">
</div>
<div class="mb-3">
<label class="form-label small fw-bold">Contraseña</label>
<input type="password" name="password" class="form-control" required
placeholder="••••••••">
</div>
<button type="submit" class="btn btn-biblioteca w-100 py-2 mb-3">Entrar</
button>
</form>
<div class="text-center small">
<a href="registro.php" class="text-decoration-none" style="color:
#8d6e63;">Crear una cuenta</a>
</div>
</div>
</div>
</div>
</body>
</html>