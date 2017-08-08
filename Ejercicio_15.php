<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Ejercicio 15</title>
  </head>
  <body>
    <div class="container">
      <h1>Algoritmo que al ingresar tres numero indique si el tercero es igual a la suma del primero y el segundo</h1> <hr>
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
        $numero1 = $_POST['numero1'];
        $numero2 = $_POST['numero2'];
        $numero3 = $_POST['numero3'];
        $suma = $numero1 + $numero2;

        if ($numero3==$suma) {
          echo "El numero ingresado si es la suma del numero 1 y el numero 2 <br>";
          echo "tercer numero = $numero3 <br>";
          echo "suma del primer numero y el segundo = $suma";
        }
        else {
          echo "El numero ingresado no es la suma del numero 1 y el numero 2 <br>";
          echo "tercer numero = $numero3 <br>";
          echo "suma del primero numero y el segundo = $suma";
        }

      ?>
   </div>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
