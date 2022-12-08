<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>

<body>
    <?php
    session_start();
    include_once('db.php');
    if (isset($_POST["nombre"]) && isset($_POST["password"])) {
       
        $nombre = $_POST["nombre"];
        $pass = $_POST["password"];

        $query = mysqli_query(conexion(), "SELECT * FROM usuarios WHERE nombre = '" . $nombre . "' and pass = '" . $pass . "'");
        $nr = mysqli_num_rows($query);

        if ($nr == 1) {
        $query2 = mysqli_query(conexion(), "SELECT suscriptor FROM usuarios WHERE nombre = '" . $nombre . "' and pass = '" . $pass . "'");
        //Guardo el tipo de suscriptor para luego utlizarlo
        while ($row = mysqli_fetch_assoc($query2)){
            
            $_SESSION["suscriptor"] = $row["suscriptor"];
        }
        $query3 = mysqli_query(conexion(), "SELECT idusuario FROM usuarios WHERE nombre = '" . $nombre . "' and pass = '" . $pass . "'");
        //Guardo el id de suscriptor para luego utlizarlo
        while ($row = mysqli_fetch_assoc($query3)){
            
            $_SESSION["idusuario"] = $row["idusuario"];
        }
          
            // Si el número de filas devueltas es mayor de 0, es decir, si existen usuarios
            $_SESSION["usuario"]=$_POST["nombre"];
           
            header('Location: home.php');
            
        } else if ($nr == 0) {
            echo "error de usuario o contraseña";
            
            echo "<p><a href = 'index.php'><b>Volver</b></a></p>";
        }


       
    }
    ?>
</body>

</html>