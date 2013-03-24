<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Loops: pointers</title>
  </head>
  <body>
    <?php 
      $ages = array(4, 8, 15, 16, 23, 42);
    ?>

    <?php 
      echo "1: " . current($ages) . "<br />"; # current gets the pointer
      next($ages); # increment the pointer
      echo "2: " . current($ages) . "<br />";
      reset($ages); # reset the pointer
      echo "3: " . current($ages) . "<br />";
    ?>

    <?php
      # while loop moving the array pointer
      while ($age = current($ages)) {
        echo $age . ", ";
        next($ages);
      }
    ?>

  </body>
</html>
