<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Catálogo | El rincon de las tartas</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Work+Sans&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="styles/styles.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="js/scripts.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

  <link rel="shortcut icon" href="images/SVG/favicon.svg" type="image/x-icon">
  <style>
    .entry-content {
      background: url("images/tartas/cabecera-catalogo.jpg");

    }
  </style>

</head>

<body onload="inicio()">
  <?php
  include_once('header.php');
  ?>
  <main>
    <div class="entry-content">

      <h1>Catálogo</h1>

    </div>
    <section>
      <div class="container-lg">
        <div class="row">

          <div class="col-12 text-center">
            <h2 class="p-3 m-5">
              Mira algunas de nuestras tartas
            </h2>

          </div>
          <div class="col-md-4 m-auto">
            <img src="" alt="" id="ruletaimg" style="width:300px ;height:300px" class="rounded">

          </div>
          <div class="col-md-6">
            <button onclick="spin()" class="btn btn-primary btn-lg">Prueba suerte</button>
          </div>

        </div>
      </div>
    </section>
    <section id="texto-imagen" style="background-color: #feced7;">
      <div class="container-lg" id="tarta1">
        <div class="row flex-sm-column-reverse flex-lg-row">
          <div class=" col-lg-6 d-flex align-items-center p-3">
            <h3 class="text-dark">Bizcocho de chocolate  mediano</h3>
          </div>
          <div class="col-lg-6 p-3">
            <img src="images/tartas/tarta-home-1.webp" style="width:350px ;height:350px" class="img-fluid rounded" alt="...">
          </div>
        </div>
      </div>
    </section>
    <section id="texto-imagen">
      <div class="container-lg" id="tarta2">
        <div class="row">
          <div class="col-lg-6 p-3">
            <img src="images/tartas/tarta-home-2.webp" style="width:350px ;height:350px" class="img-fluid rounded" alt="...">
          </div>
          <div class=" col-lg-6 d-flex align-items-center p-3">
          <h3>Tarta de fresa  grande</h3>
          </div>

        </div>
      </div>
    </section>
    <section id="texto-imagen" style="background-color: #feced7;">
      <div class="container-lg" id="tarta3">
        <div class="row flex-sm-column-reverse flex-lg-row">
          <div class=" col-lg-6 d-flex align-items-center p-3">
          <h3 class="text-dark">Tarta de platano  pequeña</h3>
          </div>
          <div class="col-lg-6 p-3">
            <img src="images/tartas/tarta-home-3.webp" style="width:350px ;height:350px" class="img-fluid rounded" alt="...">
          </div>
        </div>
      </div>
    </section>
    <section id="texto-imagen">
      <div class="container-lg" id="tarta4">
        <div class="row">
          <div class="col-lg-6 p-3">
            <img src="images/tartas/tarta-home-4.webp" style="width:350px ;height:350px" class="img-fluid rounded" alt="...">
          </div>
          <div class=" col-lg-6 d-flex align-items-center p-3">
          <h3>Tarta de vainillia  mediana</h3>
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