<?php
include_once('../config/config.php');
include_once('../config/funtions.php');
sessionFalse();
include_once('Student.php'); //Incluimos la clase Teacher.
$student = new Student(); // Creamos una nueva instancia de la clase Teacher.
$students = $student->getStudents();
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <title> Lista de estudiantes </title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
  <?php include_once('menu.php') ?>
  <div class="container">
    <h2 class="mt-5 mb-5"> Lista de estudiantes matriculados. </h2>
    <a class="btn btn-info mb-5 float-right" href="<?= ROOT ?>/Students/add.php"> Nuevo estudiante </a>
    <table class="table">
      <thead>
        <tr>
          <th>Nombres</th>
          <th>Apellidos</th>
          <th>Email</th>
          <th>Nota</th>
          <th>avatar</th>
          <th></th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <?php while ($student = mysqli_fetch_object($students)) {
          echo " <tr> ";
          echo " <td> $student->firstName</td> ";
          echo " <td> $student->lastName </td> ";
          echo " <td> $student->email </td> ";
          echo " <td> $student->note </td> ";
          echo " <td> <img src='".ROOT."/images/$student->image' alt='Imagen' width='50' height='50' /></td> ";
          echo " <td><a href='" . ROOT . "/Students/edit.php?id=" . $student->id . "' >Modificar</a></td> ";
          echo " <td><a href='" . ROOT . "/Students/remove.php?id=" . $student->id . "' >Eliminar</a></td> ";
          echo " </tr> ";
        } ?>
      </tbody>
    </table>
  </div>
</body>

</html>