<?php
session_start();
include_once('db.php');
$conexion = conexion();
$target_dir = "images/recetas/";
$target_file = $target_dir . basename($_FILES["imagen"]["name"]);


if (move_uploaded_file($_FILES["imagen"]["tmp_name"], $target_file)) {
    echo "El archivo " . htmlspecialchars(basename($_FILES["imagen"]["name"])) . " ha sido subida.";
} else {
    echo "Sorry, there was an error uploading your file.";
}

$titulo = $_POST["titulo"];
$ingredientes = $_POST["ingredientes"];
$imagen = $target_file;
$preparacion = $_POST["preparacion"];
$idusuario = $_SESSION["idusuario"];
$sql = "INSERT INTO recetas(titulo, ingredientes, preparacion, imagen, idusuario) VALUES ('$titulo','$ingredientes','$preparacion','$imagen',$idusuario)";

$query = mysqli_query($conexion, $sql);

if (!$query) {
    echo "No se ha insertado nada";
} else {
    echo "Receta registrado";
}
mysqli_close($conexion);
echo "<p><a href = 'recetas.php'><b>Volver</b></a></p>";
?>