<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Ejercicio 16</title>
  </head>
  <body>
    <div class="container">
      <h2>Algoritmo menu</h2><hr>
      <form method="post">
        <label>Seleccione:
          <li>1. Añadir</li>
          <li>2. Editar</li>
          <li>3. Eliminar</li>
        </label>
        <br>
        <input type="number" name="lista">
        <br>
        <br>
        <input type="submit" name="enviar" value="Aceptar">
        <hr>
      </form>
      <?php
        $lista = $_POST['lista'];

        switch ($lista) {
          case 1:
            echo "Opcion Correcta";
            break;
          case 2:
            echo "Opcion Correcta";
            break;
          case 3:
            echo "Opcion Correcta";
            break;
          default:
            echo "No eligio ninguna opcion del menú";
            break;
        }

      ?>
   </div>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
