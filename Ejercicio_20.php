<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Ejercicio 20</title>
  </head>
  <body>
    <div class="container">
      <h1>Algoritmo de unidades metricas</h1> <hr>
      <form method="post">
        <label>Digite el valor a convertir:</label>
        <input type="number" name="KM" required>
        <hr>
        <label>En que unidad desea convertirlo:
          <li>1. HM - Hectómetro</li>
          <li>2. DM - Decámetro</li>
          <li>3. M - Metro</li>
          <li>4. dm - Decímetro</li>
          <li>5. cm - Centímetro</li>
          <li>6. mm - Milímetro</li>
        </label>
        <br>
        <input type="number" name="lista">
        <br>
        <br>
        <input type="submit" name="enviar" value="Aceptar">
        <hr>
      </form>
      <?php
        $lista = $_POST['lista'];
        $KM = $_POST['KM'];
        $conHM=0;
        $conDM=0;
        $conM=0;
        $condm=0;
        $concm=0;
        $conmm=0;

        switch ($lista) {
          case 1:
            $conHM = 10*$KM;
            echo "$KM KM convertidos a Hm son: $conHM Hectometros";
            break;
          case 2:
            $conDM = 100*$KM;
            echo "$KM KM convertidos Dm son: $conDM Decametros";
            break;
          case 3:
            $conM = 1000*$KM;
            echo "$KM KM convertidos a m son: $conM Metros";
            break;
          case 4:
            $conM = 10000*$KM;
            echo "$KM KM convertidos a dm son: $conM Decímetros";
            break;
            case 5:
              $conM = 100000*$KM;
              echo "$KM KM convertidos a cm son: $conM  Centímetros";
              break;
            case 6:
              $conM = 1000000*$KM;
              echo "$KM KM convertidos a mm son: $conM  Milímetros";
              break;
          default:
            echo "No eligio ninguna opcion del menú";
            break;
        }

      ?>
   </div>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
