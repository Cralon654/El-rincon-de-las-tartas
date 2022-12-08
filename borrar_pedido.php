<?php

include_once('db.php');
$conexion = conexion();
$pedido = $_GET['id'];
$query = "DELETE FROM pedidos WHERE idpedido = $pedido";
$result = mysqli_query($conexion,$query);

if ($result) {
    echo 'El pedido fue borrado';
} else {
    echo 'El pedido no fue borrado';
}

echo "<p><a href = 'perfil.php'><b>Volver al perfil</b></a></p>";
?>