<?php
session_start();
session_unset();
session_destroy();

// Eliminar la cookie físicamente[cite: 5]
if (isset($_COOKIE['id_usuario'])) {
    setcookie('id_usuario', '', time() - 3600, '/');
}

header("Location: login.php");
exit();
?>