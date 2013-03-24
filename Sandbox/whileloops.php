<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Loops: while</title>
  </head>
  <body>
    <?php 
      $count = 0;
      while ($count <= 10) {
        echo $count . ", ";
        $count++;
      }
      echo "<br > Count: {$count}";
    ?>

  </body>
</html>
