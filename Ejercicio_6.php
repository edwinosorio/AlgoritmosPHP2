<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Ejercicio 6</title>
  </head>
  <body>
   <div class="container">
     <h1>Algoritmo que solo permita ingresar los caracteres ADSI</h1> <hr>
     <form method="post">
         Ingrese letra:<input type="text" name="letra" value="">
         <input type="submit" name="Enviar" value="Calcular">
         <hr>
     </form>

     <?php
         $letra=$_POST['letra'];

         if($letra=='a' or $letra=='d' or $letra=='s' or $letra=='i' or $letra=='A' or $letra=='D' or $letra=='S' or $letra=='I') {
           echo "Caracter correcto";
         }

         else  {
           echo "Caracter incorreto";
         }

         ?>

   </div>
  </body>
</html>
