<?php
include_once('../config/config.php');
include_once('../config/funtions.php');
if (isset($_GET['close']) && $_GET['close'] === '1') {
  closeSession($_GET['close']);
}

validateSession();
include_once('Teacher.php'); //Incluimos la clase Teacher.
$teacher = new Teacher(); // Creamos una nueva instancia de la clase Teacher.
//Validamos si existe $_POST y si es diferente a vacío.
$error = false;

if (isset($_POST) && !empty($_POST)) {
  $save = $teacher->login($_POST); //Llamamos la función save de la clase Teacher.

  if ($save) {
    $_SESSION["existsSession"] = true;
    header("Location: " . ROOT . "/Students/index.php");
  } else {
    $error = true;
  }
}
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <title> Iniciar sesión </title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
  <? include_once('menu.php'); ?>
  <div class="container">
    <?= $error ? '<div class="alert alert-danger" role="alert"> Los datos están incorrectos. </div>' : ''; ?>
    <h2> Iniciar sesión </h2>
    <form method="POST" enctype="multipart/form-data">
      <div class="row">
        <div class="col">
          <input class="form-control" type="email" name="email" id="email" placeholder="Ingresar tu usuario" />
        </div>
      </div>
      <div class="row">
        <div class="col">
          <input class="form-control" type="password" name="password" id="password" placeholder="Ingresar tu contraseña" />
        </div>
      </div>
      <button class="btn btn-success"> Ingresar </button>
    </form>
  </div>
</body>

</html>