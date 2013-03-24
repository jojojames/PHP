<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Loops: break</title>
  </head>
  <body>
    <?php 
      for ($count=0; $count <=10; $count++) {
        if ($count == 9) {
          break;
        }
        echo $count;
        if ($count <10) {
          echo ", ";
        }
      }
    ?>
  </body>
</html>
