<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Ejercicio 8</title>
  </head>
  <body>
  <div class="container">
    <h1>Algoritmo que pida ingresar una letra y valide si es vocal o no</h1> <hr>
        <form method="post">
            Ingrese letra: <input type="text" name="letra" value="">
            <input type="submit" name="Enviar" value="Calcular">
            <hr>
        </form>

        <?php
            $letra=$_POST['letra'];

            if($letra==a or $letra==e or $letra==i or $letra==o or $letra==u or $letra==A or $letra==E or $letra==I or $letra==O or $letra==U) {
              echo "El caracter ingresado es una vocal";
            }

            else{
              echo "El caracter ingresado no es un vocal";
            }
            ?>

    </div>
  </body>
</html>
