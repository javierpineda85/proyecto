<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Pragma" content="no-cache">

    <!-- HOJAS DE STILOS-->

    <link rel="stylesheet" href="css/stylesCapa.css">
    <!--    <link rel="stylesheet" href="css/master.css">-->

    <!--FUENTES E ICONOS-->

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.9.0/css/all.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="img/faviconasa.ico">
    <title>Capacitaciones</title>

</head>

<body class="capacitacion">

    <div class="menu">
        <?php include_once ("header.php") ?>
    </div>


    <div class="container bg-image-white" id="capacitacion">

        <div class="titulo banner-standard bg-capa">

            <h1 class="capacitacion banner-texto-standard"> CAPACITACIONES</h1>
            <div class="span subtitulo">
                <span class="capacitacion">Porque sabemos que es importante estar siempre capacitado, es que ofrecemos este espacio para que puedas invertir en tu futuro. Mirá los cursos que A.S.A Mendoza tiene para ofrecerte. <br> Pasá el mousse sobre la imagen para obtener más información.</span>
            </div>

        </div>



        <section class="productos">

            <div class="product">

                <div class="imgBx">

                    <img class="product" src="img/products/prod-01.jpeg" alt="">
                </div>

                <div class="contenido">

                    <h2>Título</h2>
                    <p> "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                    <a href="carrito.php" id="comprar">Comprar ahora</a>
                    <a href="#" id="ampliar">Agrandar imagen</a>
                    <!-- <a href="#"id="contenido">Agregar al carrito</a> NO ENTIENDO LA DIFERENCIA ENTRE COMPRAR Y AGREGAR -->
                </div>

            </div>

            <div class="cards">

                <img class="cards" src="img/pagos.png">

            </div>

            <div class="consultas">
                <p><b>Tenés alguna consulta? </b> <i>Comunicate ahora con nuestros operadores y te ayudaran: <b> 261-669 7897 </b></i></p>
            </div>
        </section>

        <section class="productos">

            <div class="product">

                <div class="imgBx">

                    <img class="product" src="img/products/prod-01.jpeg" alt="">
                </div>

                <div class="contenido">

                    <h2>Título</h2>
                    <p> "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                    <a href="carrito.php" id="comprar">Comprar ahora</a>
                    <a href="#" id="ampliar">Agrandar imagen</a>
                    <!-- <a href="#"id="contenido">Agregar al carrito</a> NO ENTIENDO LA DIFERENCIA ENTRE COMPRAR Y AGREGAR -->
                </div>

            </div>

            <div class="cards">

                <img class="cards" src="img/pagos.png">

            </div>

            <div class="consultas">
                <p><b>Tenés alguna consulta? </b> <i>Comunicate ahora con nuestros operadores y te ayudaran: <b> 261-669 7897 </b></i></p>
            </div>
        </section>

        <section class="prod-relacionados">
            <div class="titulo">
                <h3 id="blanco">PRODUCTOS</h3>

                <h3 id="naranja">RELACIONADOS</h3>
            </div>
            <br>
            <div class="prod-rel">
                <img id="prod-rel" src="img/products/prod-rel-01.jpg" alt="">
            </div>
            <div class="prod-rel">
                <img id="prod-rel" src="img/products/prod-rel-02.jpg" alt="">
            </div>
            <div class="prod-rel">
                <img id="prod-rel" src="img/products/prod-rel-01.jpg" alt="">
            </div>

        </section>
    </div>

    <footer>

        <?php include_once("footer.php") ?>

    </footer>
</body>

</html>
