<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Ejercicio 13</title>
  </head>
  <body>
    <div class="container">
      <h1>Algoritmo que pida ingresar 3 numeros y detecte si estan en orden ascendente </h1> <hr>
      <form method="post">
        <label>Ingrese un numero :</label>
        <input type="number" name="numero1">
        <br> <br>
        <label>Ingrese segundo numero :</label>
        <input type="number" name="numero2">
        <br> <br>
        <label>Ingrese tercer numero :</label>
        <input type="number" name="numero3">
        <br> <br>
        <input type="submit" name="enviar" value="calcular">
        <hr>
      </form>
      <?php
        $numero1=$_POST['numero1'];
        $numero2=$_POST['numero2'];
        $numero3=$_POST['numero3'];

      if ($numero1<$numero2 && $numero2<$numero3) {
          echo "Los numeros estan ordenados de forma ascendente <br>";
        }
        else {
          echo "Los numeros no estan ordenados de forma ascendente <br>";
        }

       ?>
   </div>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
