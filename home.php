<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home | El rincon de las tartas</title>
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

      <h1>El rincon de las tartas</h1>

    </div>
    <section id="texto-imagen" style="background-color: #feced7;">
      <div class="container-lg">
        <div class="row">
          <div class=" col-lg-6 d-flex align-items-center p-3">
            <div class="col-12">
              <h2 class="text-dark">Conocenos</h2>
              <p>Endulzamos la mesa de familias y restaurantes desde hace varios años. Elaboramos tartas caseras y pastelería artesana para cuidar el paladar, la sonrisa y la memoria del sabor. Porque los mejores recuerdos siempre giran alrededor de una tarta.</p>
              <a class="btn btn-primary" href="quienes-somos.php" role="button">Conocenos</a>

            </div>
          </div>
          <div class="col-lg-6 p-3">
            <img src="images/tarta.jpg" class="img-fluid rounded" alt="...">
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="container-lg">
        <div class="row">
          <div class=" col-lg-6 d-flex align-items-center m-auto p-3">
            <h2>Disfruta de nuestras tartas.</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-12 col-lg-3 m-auto p-3">
            <div class="card shadow  bg-body rounded">
              <img src="images/Tartas/tarta-home-1.webp" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text">Bizcocho de chocolate  mediano</p>
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-3 m-auto p-3">
            <div class="card shadow  bg-body rounded">
              <img src="images/Tartas/tarta-home-2.webp" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text">Tarta de fresa  grande</p>
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-3 m-auto p-3">
            <div class="card shadow  bg-body rounded">
              <img src="images/Tartas/tarta-home-3.webp" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text">Tarta de platano  pequeña</p>
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-3 m-auto p-3">
            <div class="card shadow  bg-body rounded">
              <img src="images/Tartas/tarta-home-4.webp" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text">Tarta de fresa  grande</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="cta">
      <div class="container-lg">
        <div class="row">
          <div class="col-lg-12 m-auto p-3">
            <h3 class="text-dark">Realiza tu pedido</h3>
            <P>Hay caprichos que sí te puedes permitir. Sorprende a tu familia, invitados o clientes con una de nuestras tartas.

            </P>
            <a class="btn btn-primary" href="pedidos.php" role="button">Realiza tu pedido</a>
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="container-lg m-auto">
        <div class="row">
          <div class="col-lg-12 p-3">
            <h2 class="p-3">Algunas tartas de nuestros usuarios</h2>
           
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
              
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="images/tarta.jpg"style="height:400px" class="img-fluid" alt="...">
                </div>
                <?php
                 $conexion = conexion();
                 $sql = "SELECT imagen FROM recetas";
                 //la ejecutamos
                 $resul = mysqli_query($conexion, $sql);
                 //comprobamos que tenemos resultados y los mostramos
                 if (mysqli_num_rows($resul) > 0) {

                   while ($fila = mysqli_fetch_assoc($resul)) {
                     echo "<div class='carousel-item' data-bs-interval='5000'><img style='height:400px' src='" . $fila['imagen'] . "' class='img-fluid' alt='...'></div>";
                   }
                  mysqli_close($conexion);
                 } 
                 ?>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
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