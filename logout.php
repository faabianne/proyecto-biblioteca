<?php
// logout.php
session_start();
session_unset();
session_destroy();

// ELIMINAR COOKIE (Ponemos tiempo en el pasado)
if (isset($_COOKIE['id_usuario'])) {
    setcookie('id_usuario', '', time() - 3600, '/');
}

header("Location: login.php");
exit();
?>