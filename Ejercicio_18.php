<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Ejercicio 18</title>
  </head>
  <body>
    <div class="container">
    <h1>Algoritmo que al ingresar tres numero indique si el tercero es igual al modulo de la division del primero y el segundo</h1> <hr>
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

        if ($numero1%$numero2==$numero3) {
          echo "El tercer numero ingresado es el modulo de la division <br>";
        }
        else {
          echo "El tercer numero ingresado no es el modulo de la division <br>";
        }

      ?>
   </div>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
