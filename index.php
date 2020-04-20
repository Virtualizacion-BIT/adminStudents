<?php
include_once('config/config.php');
include_once('config/funtions.php');
validateSession();
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <title> Iniciar sesión </title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
  <?php include_once('Teachers/menu.php'); ?>
  <div class="container">
    <h1> Bienvenido al administrador de estudiantes </h1>
  </div>
</body>

</html>