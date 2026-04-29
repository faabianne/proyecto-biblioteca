<?php
session_start();
// Validación de cookie si la sesión expiró (Imagen 2)
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
    <title>Dashboard - Sistema Biblioteca</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #f8f9fa; }
        .navbar { background-color: #2c3e50 !important; border-bottom: 4px solid #d4af37; }
        .nav-card { transition: transform 0.3s; border: none; border-left: 5px solid #8d6e63; }
        .nav-card:hover { transform: translateY(-5px); box-shadow: 0 5px 15px rgba(0,0,0,0.1); }
        .sidebar { background: white; height: 100vh; padding: 2rem 1rem; border-right: 1px solid #dee2e6; }
        .welcome-section { background: white; padding: 2rem; border-radius: 15px; border: 1px solid #dee2e6; }
    </style>
</head>
<body>
    <nav class="navbar navbar-dark p-3">
        <div class="container-fluid">
            <span class="navbar-brand mb-0 h1 font-serif">📚 Panel de Control</span>
            <div class="d-flex align-items-center">
                <span class="text-white me-3 small">Hola, <b><?php echo $_SESSION['usuario'] ?? 'Admin'; ?></b></span>
                <a href="logout.php" class="btn btn-outline-light btn-sm">Cerrar Sesión</a>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="welcome-section shadow-sm mb-4">
            <h2 class="display-6">Bienvenido al Gestor Bibliotecario</h2>
            <p class="text-muted">Administra el catálogo de libros, autores y controla los préstamos activos.</p>
        </div>

        <div class="row g-4">
            <div class="col-md-4">
                <a href="autores/alta_autor.php" class="text-decoration-none text-dark">
                    <div class="card nav-card p-4">
                        <h4>✍️ Gestión de Autores</h4>
                        <p class="small text-muted m-0">Registra nuevos escritores en el sistema.</p>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="libros/alta_libro.php" class="text-decoration-none text-dark">
                    <div class="card nav-card p-4">
                        <h4>📖 Catálogo de Libros</h4>
                        <p class="small text-muted m-0">Añade nuevos títulos a la colección.</p>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="prestamos/alta_prestamo.php" class="text-decoration-none text-dark">
                    <div class="card nav-card p-4">
                        <h4>🤝 Control de Préstamos</h4>
                        <p class="small text-muted m-0">Registra y supervisa entregas de libros.</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
</body>
</html>