<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/bootstrap.min.css">s
    <title>Ejercicio 4</title>
  </head>
  <body>
    <div class="container">
      <h1>Algoritmo que pida ingresar 3 numeros y muestren si estan de menor a mayor </h1> <hr>
      <form method="post">
        <label>Ingrese un numero:</label>
        <input type="number" name="numero1">
        <br> <br>
        <label>Ingrese un segundo numero:</label>
        <input type="number" name="numero2">
        <br> <br>
        <label>Ingrese un tercer numero:</label>
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
          echo "Los numeros estan ordenados de menor a mayor <br>";
          echo "$numero1, $numero2, $numero3";
        }
        elseif ($numero1<$numero3 && $numero3<$numero2) {
          echo "Los numeros estan ordenados de menor a mayor <br>";
          echo "$numero1, $numero3, $numero2";
        }
        elseif ($numero2<$numero1 && $numero1<$numero3) {
          echo "Los numeros estan ordenados de menor a mayor <br>";
          echo "$numero2, $numero1, $numero3";
        }

        elseif ($numero2<$numero3 && $numero3<$numero1) {
          echo "Los numeros estan ordenados de mayor a menor <br>";
          echo "$numero2, $numero3, $numero1";
        }

        elseif ($numero3<$numero1 && $numero1<$numero2) {
          echo "Los numeros estan ordenados de menor a mayor <br>";
          echo "$numero3, $numero1, $numero2";
        }
        else {
          echo "Los numeros estan ordenados de menor a mayor <br>";
          echo "$numero3, $numero2, $numero1";

        }
       ?>
    </div>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
