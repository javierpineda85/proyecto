<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Pragma" content="no-cache">

    <!-- HOJAS DE STILOS-->

    <link rel="stylesheet" href="css/stylesForms.css">


    <!--FUENTES E ICONOS-->

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.9.0/css/all.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="img/faviconasa.ico">
    <title>Registro</title>
</head>

<body class="forms" id="registro">
    <div class="menu">
        <?php include_once ("header.php") ?>
    </div>

    <section class="registro">
        <div class="container" id="registro">
            <form class="registro" action="registro.php">
                <h1 class="forms"> Registrate</h1>
                <div class="formLog" id="name">
                    <i class="fas fa-user"></i>
                    <input type="text" name="name" placeholder=" Nombre " autofocus required>
                </div>
                <div class="formLog" id="lastName">
                    <i class="fas fa-user"></i>
                    <input type="text" name="name" placeholder=" Apellido " autofocus required>
                </div>
                <div class="formLog" id="userName">
                    <i class="fas fa-user"></i>
                    <input type="text" name="name" placeholder=" Nombre de Usuario " autofocus required>
                </div>
                <div class="formLog" id="fechaDeNac">
                    <i class="fas fa-user"></i>
                    <input type="date" name="name" placeholder=" Fecha de Nacimiento DD/MM/AAAA " autofocus required>
                </div>
                <div class="formLog" id="paisDeNac">
                    <i class="fas fa-user"></i>
                    <input type="text" name="name" placeholder=" Pais de nacimiento " autofocus required>
                </div>

                <div class="formLog" id="email">
                    <i class="fas fa-at"></i>
                    <input type="email" name="email" placeholder="ejemplo@correo.com" autofocus required>
                </div>


                <div class="formLog" id="password">
                    <i class="fas fa-key"></i>
                    <input type="password" name="password" placeholder="Ingresa tu contraseña" autofocus required>
                </div>
                <div class="formLog" id="password">
                    <i class="fas fa-key"></i>
                    <input type="password" name="password1" placeholder="Repite tu contraseña" autofocus required>
                </div>

                <div class="formLog" id="phone">
                    <i class="fas fa-mobile-alt"></i>
                    <input type="phone" name="phone" placeholder="Código de área sin el 0, sin el 15" autofocus=required>
                </div>

                <div class="formLog" id="avatar">
                    <i class="fas fa-image" id="avatar"></i>
                    <input class="file" type="file" name="avatar" required>
                </div>

                <button type="submit" name="button">Registrarme</button>
                <div class="formLog" id="recordar">

                    <p>Al ingresar aceptas nuestras políticas de uso.</p><br>

                    <p>Si ya tienes un usuario <a class="forms" href="login.php">presiona aquí</a></p>

                </div>

            </form>


        </div>
    </section>
    <footer>
        <?php include_once("footer.php") ?>
    </footer>
</body>

</html>
