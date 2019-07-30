<?php
$name ="";
$lastName ="";
$userName ="";
$date ="";
$pais ="";
$email ="";
$phone ="";



$paises=[
  "AR"=>"Argentina",
  "BO"=>"Bolivia",
  "BR"=>"Brasil",
  "CL"=>"Chile",
  "CO"=>"Colombia",
  "EC"=>"Ecuador",
  "GY"=>"Guayana",
  "PY"=>"Paraguay",
  "PE"=>"Perú",
  "SR"=>"Surinam",
  "TT"=>"Trinidad y Tobago",
  "UY"=>"Uruguay",
  "VE"=>"Venezuela"
];

require_once("funciones.php");

if(estaLogueado()){
  // header("location:inicio.php");exit;
  header("location:inicio-axel.php");exit;
}

if($_POST){


  // mantenemos los datos en caso de error
//     persistencia($_POST);

        $name =$_POST["name"];
        $lastName =$_POST["lastName"];
        $userName =$_POST["userName"];
        $date =$_POST["date"];
        $pais =$_POST["pais"];
        $email =$_POST["email"];
        $phone =$_POST["phone"];
        // $avatar =$_POST["avatar"];


$existeMail = existeElEmail($_POST["email"]);
    
if ($existeMail == false) {

  $errores=validarRegistracion($_POST);
    
  if(count($errores)== 0){
   $usuario=armarUsuario($_POST);
   //guarda usuario

   guardarUsuario($usuario);

   // loguear usuario
   loguear($_POST["email"]);

  
   // header("location:inicio.php");exit;
   header("location:inicio-axel.php");exit;
  }
} else {
       $errores["email"] = "El mail que ingresaste ya está registrado";

}



}

 ?>

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

            <form class="registro" action="registro.php" method="post" enctype="multipart/form-data">
                <h1 class="forms"> Registrate</h1>
                <div class="errores">
                    <ul>
                        <?php if (isset($errores)): ?>
                        OOPS! algo salió mal:
                        <?php foreach ($errores as $error): ?>
                        <li><?php echo $error; ?></li>
                        <?php endforeach; ?>
                        Por favor verificá los datos y volvé a intentarlo.
                        <?php endif; ?>

                    </ul>
                </div>
                <div class="formLog" id="name">
                    <p class="info">Colocá tu nombre</p>
                    <i class="fas fa-user"></i>
                    <input type="text" name="name" placeholder="Nombre " value="<?= $name ?>" autofocus required>
                </div>
                <div class="formLog" id="lastName">
                    <p class="info">Colocá tu apellido</p>
                    <i class="fas fa-user"></i>
                    <input type="text" name="lastName" placeholder=" Apellido " value="<?=$lastName; ?>" autofocus required>
                </div>
                <div class="formLog" id="userName">
                    <p class="info">Tu usuario debe contener al menos 6 caracteres</p>
                    <i class="fas fa-user"></i>
                    <input type="text" name="userName" placeholder=" Elija un nombre de Usuario " value="<?= $userName; ?>" autofocus required>
                </div>
                <div class="formLog" id="fechaDeNac">
                    <p class="info">Ingresá tu fecha de nacimiento</p>
                    <i class="fas fa-birthday-cake"></i>
                    <input type="date" name="date" value="<?= $date; ?>" autofocus required>
                </div>
                <div class="formLog" id="paisDeNac">

                    <i class="fab fa-font-awesome-flag"></i> Pais de Nacimiento:
                    <!--                    <input type="text" name="name" placeholder=" Pais de nacimiento " autofocus required>-->
                    <select class="formLog" name="pais" id="pais">

                        <?php foreach ($paises as $codigo => $pais): ?>

                        <!-- // aqui necesita tener persistencia el pais elegido -->

                        <option value="<?php echo $codigo; ?>"> <?php echo $pais; ?> </option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="formLog" id="email">
                    <p class="info">Ingresá tu correo electrónico</p>
                    <i class="fas fa-at"></i>
                    <input type="email" name="email" placeholder="ejemplo@correo.com" value="<?= $email; ?>" autofocus required>
                </div>


                <div class="formLog" id="password">
                    <p class="info">Tu contraseña debe contener: mayúsculas, minúsculas y números</p>
                    <i class="fas fa-key"></i>
                    <input type="password" name="password" placeholder="Ingresá tu contraseña" autofocus required>
                </div>
                <div class="formLog" id="password">
                    <p class="info">Tu contraseña debe contener: mayúsculas, minúsculas y numeros</p>
                    <i class="fas fa-key"></i>
                    <input type="password" name="password1" placeholder="Repite tu contraseña" autofocus required>
                </div>

                <div class="formLog" id="phone">
                    <p class="info"> Recordá colocar tu número sin el 0 y sin en 15</p>
                    <i class="fas fa-phone"></i>
                    <input type="tel" name="phone" pattern="[0-9]{10}" placeholder="Ingresa tu teléfono" value="<?= $phone; ?>" autofocus required>
                </div>

                <div class="formLog" id="avatar">
                    <p class="info">Podés elegir tu avatar</p>
                    <i class="fas fa-image" id="avatar"></i>
                    <input class="file" type="file" name="avatar" value="<?= $avatar; ?>">
                </div>

                <button type="submit" name="button">Registrarme</button>
                <div class="formLog" id="recordar">

                    <p class="formLog">Al ingresar aceptas nuestras políticas de uso.</p><br>

                    <p class="formLog">Si ya tienes un usuario <a class="formLog" href="login.php">presiona aquí</a></p>

                </div>

            </form>


        </div>
    </section>
    <footer>
        <?php include_once("footer.php") ?>
    </footer>
</body>

</html>
