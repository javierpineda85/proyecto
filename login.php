<!DOCTYPE html>
<html lang="es" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Pragma" content="no-cache">

    <!-- HOJAS DE STILOS-->

    <link rel="stylesheet" href="css/stylesForms.css">


    <!--FUENTES E ICONOS-->


    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.9.0/css/all.css">
    <link rel="shortcut icon" href="img/faviconasa.ico">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <title>INGRESAR AL SITIO</title>
</head>

<body class="forms" id="login">

    <div class="menu">
        <?php include_once ("header.php") ?>
    </div>

    <section class="login">


        <div class="container">
            <h1 class="forms">Bienvenidos a</h1>
            <img class="logo" src="img/asalogo.png" alt="">

            <form class="login" action="login.php">
                <h1 class="forms">Ingresar</h1>
                <div class="formLog" id="email">
                    <i class="fas fa-at"></i>
                    <input type="email" name="email" placeholder="ejemplo@correo.com" autofocus required>
                </div>

                <div class="formLog" id="password">
                    <i class="fas fa-key"></i>
                    <input type="password" name="password" autofocus required>
                </div>

                <button type="submit" name="button">Entrar</button>

                <div class="formLog" id="recordar">

                    <input type="checkbox" class="chkbx"> Recuerdame. <br>

                    <p>Al ingresar aceptas nuestras políticas de uso.</p><br>

                    <p>Si todavía no estás registrado <a href="registro.php">presiona aquí</a></p>

                </div>

            </form>


        </div>
    </section>

    <footer>
        <?php include_once("footer.php") ?>
    </footer>

</body>

</html>
