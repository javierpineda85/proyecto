<?php
require_once("funciones.php");

$usuarioLogueado = traerUsuarioLogueado();

 ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- <title>Inicio</title> -->

    <!-- la idea es comprobar si trae el usuario y lo muestro en el title-->
    <?php if ($usuarioLogueado != null) : ?>
      <title>Bienvenido <?php echo $usuarioLogueado["name"]?></title>
    <?php else: ?>
      <title>Bienvenido Invitado</title>
    <?php endif; ?>


    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!--Personal CSS -->
    <link rel="stylesheet" href="css/style-header.css">
     <!--Icono -->
    <link rel="shortcut icon" href="img/faviconasa.ico">
    <!--FontAwesome -->
    <script src="https://kit.fontawesome.com/7907a05fb3.js"></script>

</head>

<body>
  <header>
      <?php include_once ("header.php") ?>
  </header>
  <div class="slider">
      <?php include_once ("slider.php") ?>
  </div>

<!--_____________________SECCIONES ESTATICAS-->
<section class="d-flex align-content-center flex-wrap container-fluid w-100 text-white bg-black p-3 m-auto align-items-center">
  <h2 class="m-auto"><span class="color-orange">2x1</span> en cursos!!!</h2>
</section>

<section class="d-flex container-fluid w-100 text-white bg-dark p-3 m-auto align-items-center">
  <div class="m-auto col-12 col-md-6">
    <img src="img/tarjetas.png" width="100%" alt="tarjetas">
  </div>
</section>

<section class="col-12 col-md-12 text-white bg-dark">

</section>

<footer>
    <?php include_once("footer.php") ?>
</footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/up.js"></script>
</body>

</html>
