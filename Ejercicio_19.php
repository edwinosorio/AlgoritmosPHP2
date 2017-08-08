<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Ejercicio 19</title>
  </head>
  <body>
    <div class="container">
      <h1>Algoritmo menu de opciones </h1> <hr>
      <form method="post">
        <label> Seleccione:
          <li>1. Triangulo</li>
          <li>2. Rectangulo</li>
          <li>3. Trapecio</li>
        </label>
        <br>
        <input type="number" name="lista">
        <br>
        <hr>
        <label>Digite lado:</label>
        <input type="number" name="lado" required>
        <hr>
        <input type="submit" name="enviar" value="Aceptar">
        <hr>
      </form>

      <?php
        $lista = $_POST['lista'];
        $lado = $_POST['lado'];
        $sumaTriangulo=0;
        $sumaRrectangulo=0;
        $sumaTrapecio=0;

        switch ($lista) {
          case 1:
            $sumaTriangulo = $lado * 3;
            echo "El perimetro del Triangulo es: $sumaTriangulo";
            break;
          case 2:
            $sumaRectangulo = $lado * 4;
            echo "El perimetro del Rectangulo es: $sumaRectangulo";
            break;
          case 3:
            $sumaTrapecio = $lado * 4;
            echo "El perimetro del Trapecio es: $sumaTrapecio";
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
