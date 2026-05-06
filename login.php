<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Proyecto Biblioteca</title>
    <!-- Ruta relativa desde la raíz hacia la carpeta de estilos -->
    <link rel="stylesheet" href="wwwroot/css/estilos_biblioteca.css">
</head>
<body>
    <form action="validar_login.php" method="POST">
        <h2>Acceso al Sistema</h2>
        <input type="text" name="usuario" placeholder="Nombre de usuario" required>
        <input type="password" name="password" placeholder="Contraseña" required>
        <button type="submit">Entrar</button>
        <a href="registro.php">¿No tienes cuenta? Regístrate aquí</a>
    </form>
</body>
</html>