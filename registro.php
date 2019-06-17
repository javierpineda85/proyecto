<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/stylesForms.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.9.0/css/all.css" >
    <link rel="shortcut icon" href="img/faviconasa.ico">
    <title>Registro</title>
  </head>
  <body>
    <section>
    <div class="container">
  		<form class="registro" action="registro.php">
  			<h1> Registrate</h1>
  			<div class="formLog" id="name">
          <i class="fas fa-user"></i>
  				<input type="text"name="name"  placeholder=" Nombre y Apellido"autofocus required>
  			</div>

  			<div class="formLog" id="email">
          <i class="fas fa-at"></i>
  				<input type="email"name="email" placeholder="ejemplo@correo.com"autofocus required>
  			</div>


        <div class="formLog" id="password">
          <i class="fas fa-key"></i>
        	<input type="password" name="password" placeholder="Ingresa tu contraseña"autofocus required>
        </div>
  			<div class="formLog" id="password">
          <i class="fas fa-key"></i>
  				<input type="password" name="password1" placeholder="Repite tu contraseña" autofocus required>
  			</div>

  			<div class="formLog" id="phone">
          <i class="fas fa-mobile-alt"></i>
  				<input type="phone"name="phone" placeholder="Código de área sin el 0, sin el 15"autofocus= required>
  			</div>

  			<div class="formLog" id="avatar">
          <i class="fas fa-image"id="avatar"></i>
  			     <input class="file" type="file" name="avatar" required>
  			</div>

  			<button type="submit" name="button">Registrarme</button>
  			<div class="formLog" id="recordar">

  				<p>Al ingresar aceptas nuestras políticas de uso.</p><br>

  				<p>Si ya tienes un usuario <a href="login.php">presiona aquí</a></p>

  			</div>

  		</form>


  	</div>
  </section>
  </body>
</html>
