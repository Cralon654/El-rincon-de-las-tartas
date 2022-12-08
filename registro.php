<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar | El rincon de las tartas</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="images/SVG/favicon.svg" type="image/x-icon">
</head>

<body class="text-center">
    <main class="form-signin">
        <div class="container">
            <div class="row">
                <div class="col-sm-8  m-auto">
                    <h3>Tipos de usuario</h3>
                    <form name="form-registro" method="post" action="registro2.php">
                        <img class="mb-4" src="images/SVG/icono-iniciar.svg" alt="icono-inicar" width="150" height="150">
                        <h1 class="h3 mb-3 fw-normal">Registrar</h1>

                        <div class="form-floating">
                            <input type="text" class="form-control" name="nombre" id="nombre" placeholder="carlos" required>

                        </div>
                        <div class="form-floating">
                            <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>

                        </div>
                        <div>
                            <select class="form-select" name="suscriptor" id="suscriptor" required>

                                <option value="1">Cliente</option>
                                <option value="2">Cocinero</option>

                            </select>

                        </div>

                        <button class="w-100 btn btn-lg btn-primary" type="submit">Registro</button>

                    </form>
                    <br>
                    <a href="index.php" class="w-100 btn btn-lg btn-primary">Inicio</a>
                    <h4>Cliente</h4>
                    <p>El cliente unicamentes podra realizar pedidos y ver las recetas de otros usuarios</p>
                    <h4>Cocinero</h4>
                    <p>El cocinero puedo relaizar pedidos y subir sus propias recetas para que otros usuarios puedan verlas</p>

                </div>
            </div>
        </div>

    </main>
</body>

</html>