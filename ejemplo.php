
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
  </head>
  <body>
  <div class="container">
    <h3>Ejemplo 2:php: estructura condicioneal</h3>
    <h4>usuario: <?php $usuario="admin"; echo $usuario; ?></h4>
    <?php
if ($usuario== "admin") {echo "<h5>Bienvenido usuario administrador</h5>";}

elseif ($usuario== "Invitado") {echo "<h5>Bienbenido usuario invitado</h5>";}

  else { echo ">h5> Bienvenido a la pagina de usuarios <h5>";}

     ?>
  </div>

      <script src="js/jquery-2.1.1.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="js/parallax.min.js"></script>
      <script src="js/wow.min.js"></script>
      <script src="js/jquery.easing.min.js"></script>
      <script type="text/javascript" src="js/fliplightbox.min.js"></script>
      <script src="js/functions.js"></script>
      <script src="contactform/contactform.js"></script>

  </body>
</html>
