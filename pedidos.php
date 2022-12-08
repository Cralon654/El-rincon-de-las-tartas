<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pedidos | El rincon de las tartas</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Work+Sans&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="styles/styles.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="js/scripts.js"></script>
  <link rel="shortcut icon" href="images/SVG/favicon.svg" type="image/x-icon">
  <style>
    .entry-content {
      background: url("images/tartas/cabecera-encargo.jpg");

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

      <h1>
        Pedidos
      </h1>

    </div>
    <section>
      <div class="container-lg">
        <div class="row">
          <div class="col-12">

            <h2>¿Cómo hacer un pedido?</h2>
            <p>Puede realizar su pedido llamando al <strong>666 33 44 55</strong> o a través de <a href="#formulario-pedidos">nuestro formulario</a><br> Los pedidos se realizarán con 24 horas de antelación.</p>
            <h3>Por teléfono</h3>
            <p>Llama al <a href="tel:666 33 44 55"><strong>666 33 44 55</strong></a> de 9:00 a 14:00 horas y te atenderemos con una sonrisa en la voz 🙂 También puedes dejar tu pedido en el contestador fuera de ese horario y lo atenderemos lo antes posible.</p>
            <h3>Por correo electrónico</h3>
            <p>Envíanos a través de este formulario tus datos de contacto, qué producto deseas y dónde deseas recogerlo. Nosotros nos encargamos de todo lo demás. Pero recuerda que <strong>tu pedido no quedará 100% confirmado hasta que contactemos contigo</strong> por teléfono y así te lo digamos.</p>
          </div>
    </section>

    <section id="formulario-pedidos">
      <div class="container-lg">
        <div class="row">
          <div class="col-12">
            <h2>Realiza tu pedido</h2>
          </div>
          <div class="col-sm-12 col-md-8  m-auto p-3">
            <form  class="card shadow  bg-body rounded p-3" name="formulario-pedidos" id="formulario-pedidos" action="pedidos2.php" method="post" >

              

              <div class="form-group">
                <!--  Direccion -->
                <label for="direccion" class="control-label">Dirección</label>
                <input type="text" class="form-control" id="direccion" name="direccion" required>
              </div>



              <div class="form-group">
                <!-- Telefono-->
                <label for="telefono" class="control-label">Teléfono</label>
                <input type="tel" class="form-control" id="telefono" name="telefono" placeholder="" required>
              </div>

              <div class="form-group">
                <!--  Tamaño -->
                <label for="size" class="control-label">Tamaño de la tarta</label>
                <select class="form-control" id="size" name="size" required>
                  <option value="pequeña">Pequeño</option>
                  <option value="mediana">Mediana</option>
                  <option value="grande">Grande</option>
                  

                </select>
              </div>

              <div class="form-group">
                <!-- Sabore -->
                <label for="sabor" class="control-label">Sabor</label>
                <select class="form-control" id="sabor" name="sabor" required>
                  <option value="Vainilla">Vainilla</option>
                  <option value="Chocolate">Chocolate</option>
                  <option value="Piña">Piña</option>
                  <option value="Coco">Coco</option>
                  <option value="Champagne">Champagne</option>
                  <option value="Plátano">Plátano</option>
                  <option value="Naranja">Naranja</option>
                  <option value="Ron con Pasas">Ron con Pasas</option>
                  <option value="Zanahoria">Zanahoria</option>
                  <option value="Frutos secos ">Frutos secos </option>
                  <option value="Marmoleado">Marmoleado</option>

                </select>
              </div>

              <div class="form-group">
                <!-- Detalles-->

                <div class="mb-3">
                  <label for="descripcion-pedido" class="form-label">Detalles del pedido</label>
                  <textarea class="form-control" id="descripcion-pedido" name="descripcion-pedido" rows="3"></textarea>
                </div>
              </div>

              <div class="form-group">
                <!-- Submit Button -->
                <button type="submit" class="btn btn-primary">Enviar</button>
              </div>

            </form>
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