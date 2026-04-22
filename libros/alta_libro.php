<?php include("../conexion.php"); ?>

<!DOCTYPE html>
<html>
<body>

<h2>Alta Libro</h2>

<form action="guardar_libro.php" method="POST">
    <input type="text" name="titulo" required placeholder="Título"><br>

    <select name="id_autor">
        <?php
        $res = $conexion->query("SELECT * FROM autores");
        while($row = $res->fetch_assoc()){
            echo "<option value='".$row['id']."'>".$row['nombre']."</option>";
        }
        ?>
    </select><br>

    <button type="submit">Guardar</button>
</form>

</body>
</html>