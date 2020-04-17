<?php
include_once('../config/config.php');
include_once('../config/funtions.php');
validateSession();
include_once('Teacher.php'); //Incluimos la clase Teacher.
$teacher = new Teacher(); // Creamos una nueva instancia de la clase Teacher.
//Validamos si existe $_POST y si es diferente a vacío.
if (isset($_POST) && !empty($_POST)) {
  $save = $teacher->save($_POST); //Llamamos la función save de la clase Teacher.
  if ($save) {
    header("Location: " . ROOT . "/Teachers/login.php");
  }
}
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <title> Crear profesor </title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
  <? include_once('menu.php'); ?>
  <div class="container">
    <h1> Registrar nuevo profesor </h1>
    <form method="POST" enctype="multipart/form-data">

      <div class="row mb-3">
        <div class="col">
          <input class="form-control" type="text" name="firstName" id="firstName" placeholder="Ingresar tu nombre" />
        </div>
        <div class="col">
          <input class="form-control" type="text" name="lastName" id="lastName" placeholder="Ingresar tu apellido" />
        </div>
      </div>

      <div class="row mb-3">
        <div class="col">
          <input class="form-control" type="email" name="email" id="email" placeholder="Ingresar tu email" />
        </div>
        <div class="col">
          <input class="form-control" type="password" name="password" id="password" placeholder="Ingresar tu contraseña" />
        </div>
      </div>

      <div class="row mb-3">
        <div class="col">
          <input class="form-control" type="text" name="course" id="course" placeholder="Ingresar tu curso" />
        </div>
      </div>

      <button class="btn btn-success"> Ingresar </button>
    </form>
  </div>
</body>

</html>