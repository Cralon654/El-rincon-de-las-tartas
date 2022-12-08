<?php

include_once('db.php');
$conexion = conexion();
$receta = $_GET['id'];
$query = "DELETE FROM recetas WHERE idreceta = $receta";
$result = mysqli_query($conexion,$query);

if ($result) {
    echo 'La receta fue borrado';
} else {
    echo 'La receta no fue borrado';
}

echo "<p><a href = 'perfil.php'><b>Volver al perfil</b></a></p>";
?>