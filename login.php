<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >
    <link rel="stylesheet" href="css/loginstyle.css">
    <title>INGRESAR AL SITIO</title>
  </head>
  <body>
    <section>
      <h1>Bienvenido al sitio</h1>
      <img class="logo" src="img/logo ASA.png" alt="">

      <div class="registered">
        <form class="registered" action="login.php" method="post">
          <div class="form-group">
            <label for="exampleInputEmail1">Correo electrónico:</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="ejemplo@correo.com">
            <small id="emailHelp" class="form-text text-muted">Nunca compartiremos ni tu correo ni tu contraseña.</small>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Contraseña:</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="">
          </div>
          <div class="form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
          </div>
          <button type="submit" class="btn btn-primary">Ingresar</button>
        </form>
        <!--Formulario para usuarios nuevos  -->
        <div class="forms-new">
          <form class="new-user" action="login.php" method="post">
            <div class="form-group">
              <label for="exampleInputEmail1">Correo electrónico:</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="ejemplo@correo.com">
              <small id="emailHelp" class="form-text text-muted">Nunca compartiremos ni tu correo ni tu contraseña.</small>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Contraseña:</label>
              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="">
            </div>
            <div class="form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-primary">Registrarse</button>
            <button type="submit" class="btn btn-primary">Ingresar como visitante</button>
          </form>
          <button type="submit" class="btn btn-primary">Ya poseo un usuario</button>
          <button type="submit" class="btn btn-primary">Registrarme</button>
      </div>

    </section>
  </body>
</html>
