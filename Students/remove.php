<?php
include_once('Student.php'); //Incluimos la clase Teacher.
$student = new Student(); // Creamos una nueva instancia de la clase Teacher.
  if ($student->remove($_GET['id'])){
    header('Location: ' . ROOT . '/Students/index.php');
  }else{
    echo '<div>Error al eliminar el estudiante.</div>';
  }
