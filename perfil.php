<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- HOJAS DE STILOS-->

    <link rel="stylesheet" href="css/stylesForms.css">
    <link rel="stylesheet" href="css/master.css">

    <!--FUENTES E ICONOS-->

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.9.0/css/all.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="img/faviconasa.ico">

    <title>Perfil de usuario</title>
</head>

<body class="forms" id="perfil">

    <div class="menu">
        <? include_once ("header.php") ?>
    </div>

    <section class="perfil">
        <div class="container">
            <form class="registro" action="registro.php">
                <h1> Perfil de usuario</h1>
                <div class="formLog" id="avatar">
                    <i class="fas fa-image" id="avatar"></i>

                </div>

                <div class="formLog" id="name">
                    <i class="fas fa-user"></i>
                    <input type="text" name="name" placeholder=" Nombre y Apellido" autofocus required>
                </div>

                <div class="formLog" id="email">
                    <i class="fas fa-at"></i>
                    <input type="email" name="email" placeholder="ejemplo@correo.com" autofocus required>
                </div>

                <!-- VOY A DEJAR COMENTADO LA PARTE DE password
PORQUE TAL VEZ SE PUEDA PERMITIR QUE EL Admin
MODIFIQUE SENAS
        <div class="formLog" id="password">
          <i class="fas fa-key"></i>
        	<input type="password" name="password" placeholder="Ingresa tu contraseña"autofocus required>
        </div>
  			<div class="formLog" id="password">
          <i class="fas fa-key"></i>
  				<input type="password" name="password1" placeholder="Repite tu contraseña" autofocus required>
  			</div>
-->
                <div class="formLog" id="phone">
                    <i class="fas fa-mobile-alt"></i>
                    <input type="phone" name="phone" placeholder="Código de área sin el 0, sin el 15" autofocus required>
                </div>
                <div class="formLog" id="admin">
                    <i class="fas fa-user-tie"></i>
                    <label class="admin" for="">USER ADMIN O NO</label>
                </div>
                <div class="formLog" id="permiso">
                    Desea darle permiso de administrador?
                    <input type="checkbox" class="chkbx" name="admin" value="1">SI
                    <input type="checkbox" class="chkbx" name="admin" value="0">NO
                </div>

                <div class="formLog" id="button">
                    <!-- BUSCAR OTRO -->
                    <button class="perfil" type="submit" name="button"><i class="fas fa-search-plus" id="perfil"></i></button>
                    <!-- ACTUALIZAR DATOS -->
                    <button class="perfil" type="submit" name="button"><i class="fas fa-sync-alt" id="perfil"></i></button>

                    <!--ELIMINAR USUARIO -->
                    <button class="perfil" type="submit" name="button"><i class="fas fa-user-minus" id="perfil"></i></button>
                    <!-- AGREGAR USUARIO -->
                    <button class="perfil" type="submit" name="button"><i class="fas fa-user-plus" id="perfil"></i></button>
                </div>

            </form>


        </div>
    </section>
    <footer>
        <? include_once("footer.php") ?>
    </footer>
</body>

</html>
