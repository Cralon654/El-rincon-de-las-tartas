<?php
    session_start();
    include_once('db.php');
    $conexion = conexion();
        
        
        $direccion = $_POST["direccion"];
        $telefono = $_POST["telefono"];
        $size = $_POST["size"];
        $sabor = $_POST["sabor"];
        $detalles = $_POST["descripcion-pedido"];
        $usuario = $_SESSION["idusuario"];
        $sql = "INSERT INTO pedidos(size, direccion, telefono, sabor, detalles, idusuario) VALUES ('$size','$direccion','$telefono','$sabor','$detalles',$usuario)";
        
        $query = mysqli_query($conexion,$sql);
        
        if (!$query) {
            echo "No se ha insertado nada";
        } else {
            echo "Pedido registrado";
        }
            mysqli_close($conexion);
            echo "<p><a href = 'pedidos.php'><b>Volver</b></a></p>";
        


        
