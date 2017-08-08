<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Ejercicio 21</title>
  </head>
  <body>
    <div class="container">
      <h1>Algoritmo de descuento</h1> <hr>
      <form method="post">
        <label>Ingrese valor bruto:</label>
        <input type="number" name="bruto">
        <br>
        <input type="submit" name="enviar" value="calcular">
        <hr>
      </form>

      <?php
        $bruto=$_POST['bruto'];
        $neto=0;

      if ($bruto>250000) {
        $neto=$bruto-($bruto*0.10);
          echo "Su valor a pagar es de: $neto <br>";
        }
        elseif ($bruto<250000) {
          $neto=$bruto-($bruto*0.5);
            echo "Su valor a pagar es de: $neto <br>";
          }
        else {
          echo "Usted no tiene descuento <br>";
        }

       ?>
    </div>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
