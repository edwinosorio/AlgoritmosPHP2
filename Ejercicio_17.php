<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Ejercicio 17</title>
  </head>
  <body>
    <div class="container">
      <h1>Algoritmo que al ingresar tres numero indique si el tercero es igual a la producto del primero y el segundo</h1> <hr>
      <form method="post">
        <label>Ingrese un numero :</label>
        <input type="number" name="numero1">
        <br>
        <label>Ingrese segundo numero :</label>
        <input type="number" name="numero2">
        <br>
        <label>Ingrese tercer numero :</label>
        <input type="number" name="numero3">
        <br>
        <input type="submit" name="enviar" value="calcular">
        <hr>
      </form>
      <?php
        $numero1 = $_POST['numero1'];
        $numero2 = $_POST['numero2'];
        $numero3 = $_POST['numero3'];
        $producto = $numero1 * $numero2;

        if ($numero3==$producto) {
          echo "El numero ingresado es el producto del primer y segundo numero <br>";
          echo "tercer numero = $numero3 <br>";
          echo "producto del primer numero y el segundo = $producto";
        }
        else {
          echo "El numero ingresado no es el producto del primer y segundo numero <br>";
          echo "tercer numero = $numero3 <br>";
          echo "producto del primer numero y el segundo = $producto";
        }

      ?>
   </div>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
