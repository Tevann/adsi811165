<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>condicional (switch)</title>
  </head>
  <body>
    <h1>condicional (switch)</h1>
    <hr>
    <?php
    $dia = date('D');

    switch ($dia) {
      case 'Mon':
      echo "<h3>Hoy es lunes</h3>";
        break;
        case 'Tue':
        echo "<h3>Hoy es Martes</h3>";
          break;
          case 'Wed':
          echo "<h3>Hoy es Miercoles</h3>";
            break;
            case 'Thu':
            echo "<h3>Hoy es Jueves</h3>";
              break;
              case 'Fri':
              echo "<h3>Hoy es Viernes</h3>";
                break;
                case 'Sat':
                echo "<h3>Hoy es Sabado</h3>";
                  break;
      default:
      echo "<h3>Hoy es Domingo</h3>";
        break;
    }
     ?>
  </body>
</html>
