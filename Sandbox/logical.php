<!-- Basic If Else Statement -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Logical Expressions</title>
  </head>
  <body>
    <?php 
      $a = 3;
      $b = 4;
      if ($a > $b) {
        echo "a is larger than b";
      } elseif($a == $b) {
        echo "a equals b";
      } else {
        echo "a is not larger than b";
      }

    ?>

    <?php 
      $c = 1;
      $d = 20;
      if (($a > $b) AND ($c > $d)) {
        echo "a is larger than b AND ";
        echo "c is larger than d";
      }

      if (($a > $b) OR ($c > $d)) {
        echo "either one is larger ";
      }
    ?>
  </body>
</html>
