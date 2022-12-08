<?php
    
    include_once('db.php');
    $conexion = conexion();

        
        $nombre = $_POST["nombre"];
        $pass = $_POST["password"];
        $suscriptor = $_POST["suscriptor"];
        $query = mysqli_query(conexion(), "SELECT * FROM usuarios WHERE nombre = '$nombre'");
        $nr = mysqli_num_rows($query);

        if ($nr == 1) {
            // Si el número de filas devueltas es mayor de 0, es decir, si existen usuarios
            echo "Este usuario ya exite";
            
            echo "<p><a href = 'registro.php'><b>Volver</b></a></p>";
        } else if ($nr == 0) {
            $sql = "INSERT INTO usuarios(nombre, pass, suscriptor) VALUES ('$nombre','$pass','$suscriptor')";
            $nr2 = mysqli_query($conexion, $sql);
            echo "usuario registrado";
            
            echo "<p><a href = 'index.php'><b>Volver</b></a></p>";
        }


        mysqli_close($conexion);
