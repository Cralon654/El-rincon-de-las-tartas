<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Recetas | El rincon de las tartas</title>
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
      background: url("images/tartas/cabecera-receta.jpg");

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

      <h1>Recetas</h1>

    </div>
    <section>
      <div class="container-lg">
        <div class="row">
          <div class="col-12 p-1">

            <h2>¿Cómo subir una receta?</h2>
            <p>Puede subir una receta o a través de nuestro formulario(Para subir recetas tienes que estar registrado como cocinero).</p>
          </div>
          <div class="col-sm-12 col-md-8 m-auto p-1">
            <form class="card shadow  bg-body rounded p-3" name="formulario-recetas" id="formulario-recetas" action="recetas2.php" method="post" enctype="multipart/form-data">
              <div class="row p-0">
                <div class="form-group col-sm-12 col-lg-6">
                  <!--  Titulo -->
                  <label for="titulo" class="control-label">Titulo</label>
                  <input type="text" class="form-control" id="titulo" name="titulo" required>
                </div>

                <div class="form-group col-sm-12 col-lg-6">
                  <!-- Ingredientes -->
                  <label for="ingredientes" class="control-label">Ingredientes</label>
                  <input type="text" class="form-control" id="ingredientes" name="ingredientes" required>
                </div>
              </div>
              <div class="row p-0">
                <div class="form-group col-sm-12 col-lg-6">
                  <!-- Imagen-->
                  <label for="imagen" class="control-label">Imagen</label>
                  <input type="file" class="form-control" id="imagen" name="imagen" required>
                </div>

                
    
              </div>


              <div class="form-group ">
                <!-- Detalles-->

                <div class="mb-3">
                  <label for="preparacion" class="form-label">Detalles de la receta</label>
                  <textarea class="form-control" id="preparacion" name="preparacion" rows="3"></textarea>
                </div>
              </div>

              <div class="form-group">
                <!-- Submit Button -->
                <button type="submit" class="btn btn-primary">Enviar</button>
              </div>

            </form>
          </div>
    </section>
    <section>
      <div class="row">
      <div class="col-12 p-5">
              
              <?php
              $conexion = conexion();
              $sql2 = "SELECT * FROM usuarios JOIN recetas ON usuarios.idusuario = recetas.idusuario ORDER BY `usuarios`.`idusuario` ASC";
              //la ejecutamos
              $resul = mysqli_query($conexion, $sql2);
              //comprobamos que tenemos resultados y los mostramos
              if (mysqli_num_rows($resul) > 0) {
                echo "<h3>Recetas</h3>";
                echo "<table class='table table-striped table-hover'><tr><th></th><th> &nbsp;&nbsp;Titulo&nbsp;&nbsp; </th><th> Ingredientes&nbsp;&nbsp; </th><th> &nbsp;&nbsp;Preparacion&nbsp;&nbsp; </th></tr>";
                while ($fila = mysqli_fetch_assoc($resul)) {
                  echo "<tr><td><img style='width:200px;height:200px'  src=" . $fila["imagen"] . "></td>
                    <td>" . $fila["titulo"] . "</td>
                    <td>" . $fila["ingredientes"] . "</td>
                    <td>" . $fila["preparacion"] . "</td>
                  </tr>";
                }
                echo "
                </table>";
              } 
              mysqli_free_result($resul);
              //liberamos memoria
              mysqli_close($conexion);
              ?>
            </div>
      </div>
    </section>
  </main>
  <script>
    if (<?php echo $_SESSION["suscriptor"]; ?> == 1) {
      document.getElementById("formulario-recetas").remove();
    }
  </script>
  <?php
  include_once('footer.php');
  ?>
</body>

</html>