<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro - Proyecto Biblioteca</title>
    <!-- Misma ruta que el login al estar en el mismo nivel de carpeta -->
    <link rel="stylesheet" href="wwwroot/css/estilos_biblioteca.css">
</head>
<body>
    <form action="guardar_usuario.php" method="POST">
        <h2>Crear Cuenta</h2>
        <input type="text" name="usuario" placeholder="Elige un usuario" required>
        <input type="password" name="password" placeholder="Crea una contraseña" required>
        <button type="submit">Registrarme</button>
        <a href="login.php">Ya tengo cuenta, iniciar sesión</a>
    </form>
</body>
</html>