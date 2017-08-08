<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Ejercicio 3</title>
  </head>
  <body>
   <div class="container">
     <h1>Algoritmo que al ingresar un numero del 1 al 5 imprima si es primo o no</h1> <hr>
     <form method="post">
         Ingrese numero entre 1 y 5:<input type="number" name="numero" value="">
         <input type="submit" name="Enviar" value="Calcular">
         <hr>
     </form>

     <?php
         $numero=$_POST['numero'];

         if($numero==1 or $numero==2 or $numero==3 or $numero==5) {
           echo "El numero ingresado es primo";
         }

         elseif ($numero>5 or $numero<1) {
          echo "Numero fuera de rango";
         }

         else  {
           echo "El numero ingresado no es primo";
         }

         ?>
   </div>
  </body>
</html>
