<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil | El rincon de las tartas</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="images/SVG/favicon.svg" type="image/x-icon">
    <style>
        .entry-content {
            background: url("images/tarta.jpg");

        }
    </style>

</head>

<body>
    <?php

    include_once('header.php');
    include_once('db.php');
    ?>
    <main>
        <div class="entry-content">

            <h1>perfil</h1>

        </div>
        <section>
            <div class="container-lg">
                <div class="row">


                    <div class="col-12 p-5">
                        <h3>Editar receta</h3>
                        <?php


                        $conexion = conexion();
                        $receta = $_GET['id'];
                        $query = "SELECT * FROM recetas WHERE idreceta = $receta";
                        $result = mysqli_query($conexion, $query);

                        if (!$result) {
                            echo "Lo siento pringado";
                            exit;
                        }
                        while ($fila = mysqli_fetch_assoc($result)) {
                            $cod1 = $fila["idreceta"];
                            echo "Introduzca todos los datos, no sólo el / los que desea modificar.<br />Deberá escribir de nuevo el /los que no quiere modificar<br /><br />";
                            echo "<form action = 'editar_receta2.php?idreceta=$cod1' method = 'post'>";
                            echo "<b>Titulo:</b> " . $fila["titulo"] . " <input type = 'text' name = 'titulo'  required><br />";
                            echo "<b>Ingredientes:</b> " . $fila["ingredientes"] . " <input type = 'text' name = 'ingredientes'  required><br />";
                            echo "<b>Preparacion:</b> " . $fila["preparacion"] . " <input type = 'text' name = 'preparacion'  required><br />";
                            
                            echo "<input type = 'submit' value = 'Modificar'<br />";
                        }

                        
                        mysqli_close($conexion);
                        ?>
                    </div>

                </div>
            </div>
        </section>
    </main>

    <?php
    include_once('footer.php');
    ?>
</body>

</html>