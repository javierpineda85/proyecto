<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="Pragma" content="no-cache">
    <title>Contacto</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Personal CSS -->
    <link rel="stylesheet" href="css/stylecontacto.css">

    <link href="https://fonts.googleapis.com/css?family=Lato%7CMontserrat" rel="stylesheet">
    <script src="https://unpkg.com/ionicons@4.5.5/dist/ionicons.js"></script>
    <style type="text/css" media="screen">
        A:link {
            color: black;
            text-decoration: none
        }

        A:hover {
            color: black;
            text-decoration: none
        }

        A:visited {
            color: black;
            text-decoration: none
        }

    </style>
</head>

<body>
    <div class="menu">
        <?php include_once ("header.php") ?>
    </div>
    <div class="textocontacto">
        <h2 class="form-texto"><span>Si tienes preguntas, no dudes en contactarnos.</span></h2>
    </div>
    <div class="containergral">
        <div class="contenedor-iconos">
            <ion-icon name="pin"></ion-icon>
            <p class="datoscont">DUARDO Arquitectos SL / P. de la Catellana 79, Madrid 28046.</p>
            <iframe class="mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9476.244620415422!2d-68.85932236713496!3d-32.888690753885164!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x967e09e08865d9f7%3A0x6a62c1f49ef33549!2sDigital+House+-+Mendoza!5e0!3m2!1ses!2sar!4v1561680038177!5m2!1ses!2sar" width="320" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
            <br>
            <ion-icon name="call"></ion-icon>
            <p class="datoscont">
                <a href=123-456-7890>(+34) 947 002 963</a>
            </p>
            <ion-icon name="mail"></ion-icon>
            <br>
            <a class="datoscont" href="mailto:asa.mendozaunidos@gmail.com">asa.mendozaunidos@gmail.com</a>
            <div class="iconosredes">
                <div class="redes">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-skype"></i></a>
                </div>
            </div>
        </div>
        <div class="contenedorcontacto">
            <form action="" class="form">
                <div class="form-header">
                    <h1 class="form-titulo"><span>Contacto</span></h1>
                </div>
                <label for="nombre" class="form-label">Nombre:</label>
                <input type="text" id="nombre" class="form-input" placeholder="Escriba su nombre">

                <label for="apellido" class="form-label">Apellido:</label>
                <input type="text" id="apellido" class="form-input" placeholder="Escriba su apellido">

                <label for="correo" class="form-label">Correo electronico:</label>
                <input type="email" id="correo" class="form-input" placeholder="Escriba su email">

                <label for="mensaje" class="form-label">Mensaje:</label>
                <textarea id="mensaje" class="form-textarea" placeholder="Aqui escriba su mensaje"></textarea>

                <input type="submit" class="btn-submit" value="Enviar Consulta">
            </form>
        </div>
    </div>
    <script src="js/fontawesome-all.min.js"></script>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/up.js"></script>

    <footer>
        <?php include_once("footer.php") ?>
    </footer>
</body>

</html>
