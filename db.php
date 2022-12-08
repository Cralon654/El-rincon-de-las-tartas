<?php

function conexion()
{
    $conexion = mysqli_connect("localhost", "root", "root", "elrincondelastartas");
    if (!$conexion) {
        die('<br>Imposible conectar con la base de datos ' . mysqli_connect_error());
    }
    return $conexion;
}



?>