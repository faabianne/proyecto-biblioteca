<?php include '../conexion.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../wwwroot/css/estilos_biblioteca.css">
</head>
<body>
    <form action="guardar_libro.php" method="POST">
        <h2>Alta de Libro</h2>
        <input type="text" name="titulo" placeholder="Título" required>
        <select name="id_autor">
            <?php
            $res = $conn->query("SELECT * FROM autores");
            while($row = $res->fetch_assoc()) {
                echo "<option value='".$row['id']."'>".$row['nombre']."</option>";
            }
            ?>
        </select>
        <button type="submit">Guardar Libro</button>
    </form>
</body>
</html>