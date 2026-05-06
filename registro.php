<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca - Registro</title>
    <!-- 1. Vínculo a Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- 2. Vínculo a tu archivo de estilos personalizado -->
    <link rel="stylesheet" href="wwwroot/css/estilos_biblioteca.css">
</head>
<body class="d-flex align-items-center vh-100">
    <div class="container">
        <div class="card biblioteca-card mx-auto shadow" style="max-width: 450px;">
            <div class="biblioteca-header">
                <h2 class="mb-0">📖 Crear Cuenta</h2>
                <p class="small">Únete a la comunidad bibliotecaria</p>
            </div>
            <div class="card-body p-4 bg-white">
                <form action="guardar_usuario.php" method="POST">
                    <div class="mb-3">
                        <label class="form-label fw-bold">Nombre de Usuario</label>
                        <input type="text" name="usuario" class="form-control" placeholder="Ej: fabian123" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold">Contraseña</label>
                        <input type="password" name="password" class="form-control" placeholder="••••••••" required>
                    </div>
                    <button type="submit" class="btn btn-biblioteca w-100 py-2 mb-3 shadow-sm">Registrarme</button>
                </form>
                <div class="text-center small">
                    <span class="text-muted">¿Ya tienes cuenta?</span>
                    <a href="login.php" class="text-decoration-none fw-bold" style="color: #8d6e63;">Inicia Sesión</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>