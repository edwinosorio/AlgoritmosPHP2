<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Ejercicio 10</title>
  </head>
  <body>
   <div class="container">
     <h1>Algoritmo que pida un numero y diga a que mes del año corrresponde</h1> <hr>
        <form  method="post">
          Ingrese numero:<input type="number" name="numero" value="">
          <input type="submit" name="enviar" value="calcular">
          <hr>
        </form>

        <?php
        $numero=$_POST['numero'];

          switch ($numero) {
            case 1:
              echo 'Corresponde al mes de Enero';
              break;
              case 2:
                echo 'Corresponde al mes de Febrero';
                break;
                case 3:
                  echo 'Corresponde al mes de Marzo';
                  break;
                  case 4:
                    echo 'Corresponde al mes de April';
                    break;
                    case 5:
                      echo 'Corresponde al mes de Mayo';
                      break;
                      case 6:
                        echo 'Corresponde al mes de Junio';
                        break;
                        case 7:
                          echo 'Corresponde al mes de Julio';
                          break;
                          case 8:
                            echo 'Corresponde al mes de Agosto';
                            break;
                            case 9:
                              echo 'Corresponde al mes de Septiembre';
                              break;
                              case 10:
                                echo 'Corresponde al mes de Octubre';
                                break;
                                case 11:
                                  echo 'Corresponde al mes de Noviembre';
                                  break;
                                  case 12:
                                    echo 'Corresponde al mes de Diciembre';
                                    break;
                        default:
                        echo "Mes fuera de rango";
                           break;
          }
         ?>

     </div>
  </body>
</html>
