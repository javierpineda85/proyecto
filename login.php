<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/stylesForms.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.9.0/css/all.css" >

    <title>INGRESAR AL SITIO</title>
  </head>
  <body>
    <section>
      <h1>Bienvenidos a</h1>
      <img class="logo" src="img/logo ASA.png" alt="">

      <div class="container">
    		<form class="login" action="login.php">
    			<h1>Ingresar</h1>
    			<div class="formLog" id="email">
    				<i class="fas fa-at"></i>
    				<input type="email"name="email" placeholder="ejemplo@correo.com" autofocus required>
    			</div>

    			<div class="formLog" id="password">
            <i class="fas fa-key"></i>
    				<input type="password" name="password"autofocus required>
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
  </body>
</html>
