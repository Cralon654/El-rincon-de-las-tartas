<?php session_start();
?>
<header class="container-fluid">

  <nav class="navbar navbar-expand-lg navbar-light">
    <div class="container-fluid">
      <a href="home.php" class=" align-items-center col-4  text-dark text-decoration-none">
        <img src="images/SVG/Logotipo.svg" style="width: 250px; height: 80px;" class="rounded float-start" alt="logo-rincon">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="quienes-somos.php" rel="noindex nofollow">Somos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="catalogo.php" rel="noindex nofollow">Catalogo</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pedidos.php" rel="noindex nofollow">Pedidos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="recetas.php" rel="noindex nofollow">Recetas</a>
          </li>
          <li class="nav-item">
            
            <div class="dropdown">
              <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="bi bi-person-circle"></i>
              </a>
              <ul style="right:0; left:inherit" class="dropdown-menu text-small" aria-labelledby="dropdownUser1">

                <li><a class="dropdown-item" href="perfil.php">Perfil</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="index.php">Salir</a></li>
              </ul>
            </div>
          </li>

        </ul>
      </div>
    </div>
  </nav>
</header>