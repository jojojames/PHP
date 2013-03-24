<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Second Page</title>
  </head>
  <body>
    <?php 
      print_r($_GET);
      $id = $_GET['id'];
      $name = urldecode($_GET['name']); # don't need urldecode
      echo "<br /> <strong> {$id}: {$name} </strong>";
    ?>

    <?php 
      $string = "james nguyen";
      echo urlencode($string);
      echo "<br />";
      echo rawurlencode($string);
    ?>
  </body>
</html>
