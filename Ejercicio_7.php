<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Ejercicio 7</title>
  </head>
  <body>
    <div class="container">
    <h1>Algoritmo que pida un numero y evalue si esta dentro de 10 y 100 </h1> <hr>
    <form method="post">
        Ingrese numero: <input type="number" name="numero" value="">
        <input type="submit" name="Enviar" value="Calcular">
        <hr>
    </form>

    <?php
        $numero=$_POST['numero'];

        if($numero>10 && $numero<100) {
          echo "El numero ingresado esta entre 10 y 100";
        }

        else{
          echo "El numero ingresado no esta entre 10 y 100";
        }
        ?>

   </div>
  </body>
</html>
