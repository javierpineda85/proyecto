<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Pragma" content="no-cache">

    <!-- HOJAS DE STILOS-->

        <link rel="stylesheet" href="css/stylesMuni.css">

    <!--FUENTES E ICONOS-->

    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.9.0/css/all.css">
    <link rel="shortcut icon" href="img/faviconasa.ico">

    <title>Municipalidades</title>
</head>

<body>
    <div class="menu">
        <?php include_once ("header.php") ?>
    </div>

    <div class="muni">
      <div class="banner-standard bg-muni">
          <h2 class="banner-texto-standard"><span>MUNICIPALIDADES</span></h2>
      </div>
        <div class="secciones max-width">

            <section class="seccionesmuni">
                <button class="boton" type="submit" name="capital">
                    <h2>Capital</h2>
                </button>
            </section>

            <section class="seccionesmuni">
                <button class="boton" type="submit" name="dalvian">
                    <h2>Dalvian</h2>
                </button>
            </section>

            <section class="seccionesmuni">
                <button class="boton" type="submit" name="godoy_cruz">
                    <h2>Godoy Cruz</h2>
                </button>
            </section>

            <section class="seccionesmuni">
                <button class="boton" type="submit" name="guaymallen">
                    <h2>Guaymallen</h2>
                </button>
            </section>

            <section class="seccionesmuni">
                <button class="boton" type="submit" name="junin">
                    <h2>Junin</h2>
                </button>
            </section>

            <section class="seccionesmuni">
                <button class="boton" type="submit" name="las_heras">
                    <h2>Las Heras</h2>
                </button>
            </section>

            <section class="seccionesmuni">
                <button class="boton" type="submit" name="lujan">
                    <h2>Lujan de Cuyo</h2>
                </button>
            </section>

            <section class="seccionesmuni">
                <button class="boton" type="submit" name="maipu">
                    <h2>Maipu</h2>
                </button>
            </section>

            <section class="seccionesmuni">
                <button class="boton" type="submit" name="malargue">
                    <h2>Malargue</h2>
                </button>
            </section>

            <section class="seccionesmuni">
                <button class="boton" type="submit" name="rivadavia">
                    <h2>Rivadavia</h2>
                </button>
            </section>

            <section class="seccionesmuni">
                <button class="boton" type="submit" name="san_carlos">
                    <h2>San Carlos</h2>
                </button>
            </section>

            <section class="seccionesmuni">
                <button class="boton" type="submit" name="san_martin">
                    <h2>San Martin</h2>
                </button>
            </section>

            <section class="seccionesmuni">
                <button class="boton" type="submit" name="san_rafael">
                    <h2>San Rafael</h2>
                </button>
            </section>

        </div>

    </div>
    <footer>
        <?php include_once("footer.php") ?>
    </footer>
</body>

</html>
