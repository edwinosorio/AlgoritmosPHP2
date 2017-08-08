<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Ejercicio 11</title>
  </head>
  <body>
    <div class="container">
      <h1>Algoritmo que pida dos numeros y diga si son primos, no son primos o si uno es primo y el otro no</h1> <hr>
      <form  method="post">
        <label> Ingrese numero del 1 al 5: </label>
        <input type="text" name="numerouno" min="0" max="5"> <br> <br>
        <label> Ingrese segundo numero  del 1 al 5: </label>
        <input type="text" name="numerodos" min="0" max="5"> <br> <br>
        <input type="submit" name="enviar" value="calcular">
        <hr>
      </form>

      <?php
      $numerouno=$_POST['numerouno'];
      $numerodos=$_POST['numerodos'];


      if (($numerouno==1 or $numerouno==2 or $numerouno==3 or $numerouno==5) &&  ($numerodos==1 or $numerodos==2 or $numerodos==3 or $numerodos==5)){
        echo "Los numeros ingresados son primos";

      }

      elseif (($numerouno==1 or $numerouno==2 or $numerouno==3 or $numerouno==5) && ($numerodos==4)) {
        echo "El numero uno es primo y el segundo no";

      }

      elseif (($numerodos==1 or $numerodos==2 or $numerodos==3 or $numerodos==5) && ($numerouno==4)){
        echo "El numero uno no es primo y el segundo si es primo";

      }

      else {

        echo "Ninguno de los numeros ingresados es primo";
      }


      ?>

    </div>

  </body>
</html>
