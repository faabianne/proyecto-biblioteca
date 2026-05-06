<?php include '../conexion.php'; ?>
<!DOCTYPE html>
<html>
<head><link rel="stylesheet" href="../wwwroot/css/estilos_biblioteca.css"></head>
<body>
    <form action="guardar_prestamo.php" method="POST">
        <h2>Registrar Préstamo</h2>
        <select name="id_libro">
            <?php
            $res = $conn->query("SELECT * FROM libros");
            while($row = $res->fetch_assoc()) {
                echo "<option value='".$row['id']."'>".$row['titulo']."</option>";
            }
            ?>
        </select>
        <input type="text" name="usuario" placeholder="Nombre de quien recibe" required>
        <input type="date" name="fecha" required>
        <button type="submit">Realizar Préstamo</button>
    </form>
</body>
</html>