<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Somos | El rincon de las tartas</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Work+Sans&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="styles/styles.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>
  <link rel="shortcut icon" href="images/SVG/favicon.svg" type="image/x-icon">
  <style>
    .entry-content {
      background: url("images/tartas/cabecera-somos.jpg");
     
    }
  </style>
  
</head>

<body>
<?php
include_once('header.php');
?>

  <main>

    <div class="entry-content">

      

    </div>
    <section id="texto-imagen" style="background-color: #feced7;">
      <div class="container-lg">
        <div class="row flex-sm-column-reverse flex-lg-row">
          <div class=" col-lg-6 d-flex align-items-center p-3">
          <p>El rincon de las tartas trabajamos incansablemente por un mismo objetivo: obtener la perfección en cada tarta sin importar cuantas se hayan hecho antes iguales, elaborándolas como si fuese la primera de muchas.</p>
          </div>
          <div class="col-lg-6 p-3">
            <img src="images/tartas/quienes-somos-1.jpg" class="img-fluid rounded" alt="...">
          </div>
        </div>
      </div>
    </section>
    <section id="texto-imagen">
        <div class="container-lg">
          <div class="row">
            <div class="col-lg-6 p-3">
                <img src="images/tartas/quienes-somos-2.jpg" class="img-fluid rounded" alt="...">
              </div>
            <div class=" col-lg-6 d-flex align-items-center p-3">
           <p> Seguimos estudiando, experimentando e inventando nuevos productos que se adapten a las nuevas necesidades del público. Lo hace de forma tenaz y elegante, dotando de personalidad a cada una de sus creaciones.</p>
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