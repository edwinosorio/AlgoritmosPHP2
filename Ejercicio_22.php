<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Ejercicio 22</title>
  </head>
  <body>
    <div class="container" style="background:#EEEEEE;">
      <h1>Algoritmo que permita calcular el sueldo de un empleado del SENA</h1> <hr>
      <form method="post">
        <label>Ingrese cuantos años lleva en SENA:</label>
        <input type="number" name="años">
        <br>
        <input type="submit" name="enviar" value="calcular">
        <hr>
        
      </form>
      <?php
        $años=$_POST['años'];
        $sueldo= 34000000;
        $aumento=0;
        $aumento1=0;

      if ($años==5) {
        $aumento=$sueldo*0.05;
        $aumento1=$sueldo+$aumento;
          echo "Usted lleva $años años en el Sena y se le aplicara un aumento del 5% del sueldo basico: $sueldo, el sueldo total que se le debe pagar es: $aumento1 <br>";
        }
      elseif (($años<10) && ($años>5)) {
        $aumento=$sueldo*0.10;
        $aumento1=$sueldo+$aumento;
          echo "Usted lleva $años años en el Sena y se le aplicara un aumento del 10% del sueldo basico: $sueldo, el sueldo total que se le debe pagar es: $aumento1 <br>";
        }
      elseif (($años<5) &&($años>3)) {
        $aumento=$sueldo*0.025;
        $aumento1=$sueldo+$aumento;
          echo "Usted lleva $años años en el Sena y se le aplicara un aumento del 2.5% del sueldo basico: $sueldo, el sueldo total que se le debe pagar es: $aumento1 <br>";
      }
      elseif ($años>10) {
        $aumento=$sueldo*0.15;
        $aumento1=$sueldo+$aumento;
          echo "Usted lleva $años años en el Sena y se le aplicara un aumento del 15% del sueldo basico: $sueldo, el sueldo total que se le debe pagar es: $aumento1 <br>";
        }
      elseif ($años==10) {
          echo "Usted lleva $años años en el Sena por lo tanto no se le aplicara un aumento al sueldo basico: $sueldo <br>";
          }
        else {
          echo "Usted no tiene aumento <br>";
        }

       ?>
   </div>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
