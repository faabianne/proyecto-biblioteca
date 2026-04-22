<?php include("../conexion.php"); ?>

<!DOCTYPE html>
<html>
<body>

<h2>Registrar Préstamo</h2>

<form action="guardar_prestamo.php" method="POST">

<select name="id_libro">
<?php
$res = $conexion->query("SELECT * FROM libros");
while($row = $res->fetch_assoc()){
    echo "<option value='".$row['id']."'>".$row['titulo']."</option>";
}
?>
</select><br>

<input type="text" name="usuario" placeholder="Usuario"><br>
<input type="date" name="fecha"><br>

<button type="submit">Guardar</button>

</form>

</body>
</html>