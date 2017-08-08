<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Ejercicio 11</title>
  </head>
  <body>
    <div class="container">
      <h1>Algoritmo que pida dos numeros y diga si son pares, no son pares o si uno es par y el otro no</h1> <hr>
      <form  method="post">
        <label> Ingrese numero uno del 1 al 5: </label>
        <input type="number" name="numerouno" min="0" max="5"> <br><br>
        <label> Ingrese segundo numero dos del 1 al 5: </label>
        <input type="number" name="numerodos" min="0" max="5"> <br><br>
        <input type="submit" name="enviar" value="calcular">
        <hr>
      </form>

      <?php
      $numerouno=$_POST['numerouno'];
      $numerodos=$_POST['numerodos'];


      if (($numerouno==2 or $numerouno==4) && ($numerodos==2 or $numerodos==4)){
        echo "Los numeros ingresados son pares";

      }

      elseif (($numerouno==2 or $numerouno==4) && ($numerodos==1 or $numerodos==3 or $numerodos==5)) {
        echo "El numero uno es par y el segundo es impar";

      }

      elseif (($numerodos==2 or $numerodos==4) && ($numerouno==1 or $numerouno==3 or $numerouno==5)){
        echo "El numero uno es impar y el segundo es par";

      }

      else {

        echo "los numeros ingresados son impares";
      }
      ?>
    </div>
  </body>
</html>
