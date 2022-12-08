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
          <div class="col-12">
            <div class="col-12">
              <h2><?php echo "Bienvenid@ " . $_SESSION["usuario"] ?></h2>
            </div>
            <div class="col-12 p-5">
              <h3>Pedidos</h3>
              <?php
              $conexion = conexion();
              $usuario = $_SESSION["idusuario"];
              $sql = "SELECT * FROM pedidos WHERE idusuario = '$usuario'";
              //la ejecutamos
              $resul = mysqli_query($conexion, $sql);
              //comprobamos que tenemos resultados y los mostramos
              if (mysqli_num_rows($resul) > 0) {
                echo "<table class='table table-striped table-hover'><tr><th> &nbsp;&nbsp;Tamaño&nbsp;&nbsp; </th><th> &nbsp;&nbsp;Nombre completo&nbsp;&nbsp; </th><th> Direccion&nbsp;&nbsp; </th><th> &nbsp;&nbsp;Telefono&nbsp;&nbsp; </th><th> &nbsp;&nbsp;Sabor&nbsp;&nbsp; </th><th> &nbsp;&nbsp;Detalles&nbsp;&nbsp; </th><th></th></tr>";
                while ($fila = mysqli_fetch_assoc($resul)) {
                  echo "<tr><td>" . $fila["idpedido"] . "</td>
                    <td>" . $fila["size"] . "</td>
                    <td>" . $fila["direccion"] . "</td>
                    <td>" . $fila["telefono"] . "</td>
                    <td>" . $fila["sabor"] . "</td>
                    <td>" . $fila["detalles"] . "</td>
                    <td><a href='borrar_pedido.php?id=" . $fila["idpedido"] . "'><i class='bi bi-trash'></i></a></td>
                  </tr>";
                }
                echo "
                </table>";
              } else {
                echo "No hay pedidos.<br />";
              }
              mysqli_free_result($resul);
              //liberamos memoria
              mysqli_close($conexion);
              ?>

            </div>
            <div class="col-12 p-5">
              <h3>Recetas</h3>
              <?php
              
                $conexion = conexion();
                $sql2 = "SELECT * FROM recetas WHERE idusuario = '$usuario'";
                //la ejecutamos
                $resul = mysqli_query($conexion, $sql2);
                //comprobamos que tenemos resultados y los mostramos
                if (mysqli_num_rows($resul) > 0) {
                  echo "<table class='table table-striped table-hover'><tr><th></th><th> &nbsp;&nbsp;Titulo&nbsp;&nbsp; </th><th> Ingredientes&nbsp;&nbsp; </th><th> &nbsp;&nbsp;Preparacion&nbsp;&nbsp; </th><th></th><th></th></tr>";
                  while ($fila = mysqli_fetch_assoc($resul)) {
                    echo "<tr><td><img style='width:200px;height:200px'  src=" . $fila["imagen"] . "></td>
                    <td>" . $fila["titulo"] . "</td>
                    <td>" . $fila["ingredientes"] . "</td>
                    <td>" . $fila["preparacion"] . "</td>
                    <td><a href='editar_receta.php?id=" . $fila["idreceta"] . "'><i class='bi bi-pencil-square'></i></a></td>
                    <td><a href='borrar_receta.php?id=" . $fila["idreceta"] . "'><i class='bi bi-trash'></i></a></td>
                  </tr>";
                  }
                  echo "
                </table>";
                } else {
                  echo "No hay recetas.<br />";
                }
                mysqli_free_result($resul);
                //liberamos memoria
                mysqli_close($conexion);
              
              ?>
            </div>
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