<?php
include_once('../config/config.php');
include_once('../config/funtions.php');
sessionFalse();
include_once('Student.php'); //Incluimos la clase Teacher.
$student = new Student(); // Creamos una nueva instancia de la clase Teacher.
$dataStudnet = mysqli_fetch_object($student->getOne($_GET['id'])); //Llamamos la función save de la clase Teacher.

//Validamos si existe $_POST y si es diferente a vacío.
if (isset($_POST) && !empty($_POST)) {
  $_POST['image'] = $dataStudnet->image;

  if ($_FILES['image']['name'] !== '') {
    $_POST['image'] = getImageName($_FILES);
  }
  $save = $student->update($_POST);
  if ($save) {
    header("Location: " . ROOT . "/Students/index.php");
  }
}

?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <title> Crear studiante </title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
  <?php include_once('menu.php') ?>
  <div class="container">
    <h2 class="mt-5 mb-5"> Estudiante: <b><?= $dataStudnet->firstName ?> <?= $dataStudnet->lastName ?></b> </h2>
    <form method="POST" enctype="multipart/form-data">

      <div class="row mb-3">
        <div class="col">
          <input class="form-control" type="text" name="firstName" id="firstName" value="<?= $dataStudnet->firstName ?>" placeholder="Nombre estudiante" />
          <input type="text" name="id" id="id" value="<?= $dataStudnet->id ?>" />
        </div>
        <div class="col">
          <input class="form-control" type="text" name="lastName" id="lastName" value="<?= $dataStudnet->lastName ?>" placeholder="Apellido estudiante" />
        </div>
      </div>

      <div class="row mb-3">
        <div class="col">
          <input class="form-control" type="email" name="email" id="email" value="<?= $dataStudnet->email ?>" placeholder="Email estudiante" />
        </div>
        <div class="col">
          <input class="form-control" type="number" name="note" id="note" value="<?= $dataStudnet->note ?>" placeholder="Nota estudiante" />
        </div>
      </div>

      <div class="row mb-3">
        <div class="col">
        <input class="form-control" type="file" id="image" name="image" accept="image/png, image/jpeg" />
        </div>
      </div>

      <button class="btn btn-success"> Actualizar </button>
    </form>
  </div>
</body>

</html>