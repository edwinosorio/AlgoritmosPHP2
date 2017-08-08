<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Ejercicio 9</title>
  </head>
  <body>
    <div class="container">
    <h1>Algoritmo que pida un numero y diga a que dia de la semana corresponde</h1> <hr>
    <form  method="post">
      Ingrese numero:<input type="number" name="numero" value="">
      <input type="submit" name="enviar" value="calcular">
      <hr>
    </form>

    <?php
    $numero=$_POST['numero'];

      switch ($numero) {
        case 1:
          echo 'El dia de la semana es Lunes';
          break;
          case 2:
            echo 'El dia de la semana es Martes';
            break;
            case 3:
              echo 'El dia de la semana es Miercoles';
              break;
              case 4:
                echo 'El dia de la semana es Jueves';
                break;
                case 5:
                  echo 'El dia de la semana es Viernes';
                  break;
                  case 6:
                    echo 'El dia de la semana es Sabado';
                    break;
                    case 7:
                      echo 'El dia de la semana es Domingo';
                      break;
                    default:
                       break;
      }
     ?>

   </div>
  </body>
</html>
