<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro - Biblioteca</title>
    <link rel="stylesheet" href="wwwroot/css/estilos_biblioteca.css">
</head>
<body>
    <div class="container">
        <h2>Registro de Usuario</h2>
        <form action="guardar_usuario.php" method="POST">
            <input type="text" name="nombre" placeholder="Nombre de usuario" required>
            <input type="password" name="password" placeholder="Contraseña" required>
            <button type="submit">Registrar</button>
        </form>
    </div>
</body>
</html>