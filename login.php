<?php
session_start();
// Si la cookie existe, entra directo (Imagen 2/3)
if (isset($_COOKIE['id_usuario'])) {
    header("Location: dashboard.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca - Iniciar Sesión</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Poppins:wght@300;400&display=swap" rel="stylesheet">
    <style>
        body { background: #f4f1ea; font-family: 'Poppins', sans-serif; }
        .login-card { border: none; border-radius: 15px; box-shadow: 0 10px 30px rgba(0,0,0,0.1); background: white; }
        .card-header { background: #2c3e50; color: #d4af37; border-radius: 15px 15px 0 0 !important; font-family: 'Playfair Display', serif; text-align: center; padding: 2rem; }
        .btn-primary { background: #8d6e63; border: none; }
        .btn-primary:hover { background: #6d4c41; }
        .form-control:focus { border-color: #8d6e63; box-shadow: 0 0 0 0.25 dir="ltr"rem rgba(141, 110, 99, 0.25); }
    </style>
</head>
<body>
<div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="card login-card" style="width: 100%; max-width: 400px;">
        <div class="card-header">
            <h2 class="mb-0">📚 Mi Biblioteca</h2>
        </div>
        <div class="card-body p-4">
            <form action="validar_login.php" method="POST">
                <div class="mb-3">
                    <label class="form-label text-muted small uppercase fw-bold">Usuario</label>
                    <input type="text" name="usuario" class="form-control" placeholder="Escribe tu usuario" required>
                </div>
                <div class="mb-3">
                    <label class="form-label text-muted small uppercase fw-bold">Contraseña</label>
                    <input type="password" name="password" class="form-control" placeholder="••••••••" required>
                </div>
                <button type="submit" class="btn btn-primary w-100 py-2 mb-3 shadow-sm">Entrar al Sistema</button>
            </form>
            <div class="text-center">
                <span class="text-muted small">¿No tienes cuenta?</span>
                <a href="registro.php" class="text-decoration-none small fw-bold" style="color: #8d6e63;">Regístrate aquí</a>
            </div>
        </div>
    </div>
</div>
</body>
</html>