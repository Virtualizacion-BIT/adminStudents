<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Estudiantes</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="<?= ROOT ?>/Students/index.php">Ver estudiantes</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= ROOT ?>/Students/add.php">Registrar nuevo</a>
      </li>
    </ul>
    <span class="navbar-text">
    <a class="nav-link" href="<?= ROOT ?>/Teachers/login.php?close=1">Cerrar sesión</a>
    </span>
  </div>
</nav>