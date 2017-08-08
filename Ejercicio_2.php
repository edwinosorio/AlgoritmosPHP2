<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Ejercicio 2</title>
  </head>
  <body>
   <div class="container">
     <h1>Algoritmo que al ingresar un numero imprima si es par o impar</h1> <hr>
     <form method="post">
         Ingrese numero: <input type="number" name="numero" value="">
         <input type="submit" name="Enviar" value="Calcular">
         <hr>
     </form>

     <?php
         $numero=$_POST['numero'];

         if($numero%2==0) {
           echo "El numero ingresado es par";
         }

         else{
           echo "El numero ingresado es impar";
         }

         ?>
   </div>
  </body>
</html>
