<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Algoritmos</title>
  </head>
  <body>
   <div class="container">
     <h1>Algoritmo que al ingresar un numero imprima si es positivo o negativo</h1> <hr>
     <form method="post">
         Ingrese numero: <input type="number" name="numero" value=""> <br>
         <input type="submit" name="Enviar" value="Calcular"> <br> <br>
     <hr>
     </form>

     <?php

         $numero=$_POST['numero'];


         if($numero>0) {

           echo "positivo";
         }


         else{
           echo "negativo";
         }

         ?>
   </div>
  </body>
</html>
