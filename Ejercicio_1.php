<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Ejercicio 1</title>
  </head>
  <body>
   <div class="container">
     <h1>Algoritmo que al ingresar un numero imprima si es mayor a 10</h1> <hr>
     <form method="post">
         Ingrese numero: <input type="number" name="numero" value="">
         <input type="submit" name="Enviar" value="Calcular">
     <hr>
     </form>

     <?php
         $numero=$_POST['numero'];

         if($numero>10) {

           echo "es mayor a 10";
         }


         else{
           echo "No es mayor a 10";
         }

         ?>
   </div>
  </body>
</html>
