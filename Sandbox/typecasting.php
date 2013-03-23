<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Type Casting</title>
  </head>
  <body>
    <?php 
      $var1 = "2";
      $var2 += $var1 + 3;
      echo $var1;
    ?>
    <br />
    <?php 
      echo gettype($var1); echo "<br />"; # string
      echo gettype($var2); echo "<br />"; # int
      settype($var2, "string");
      echo gettype($var2); echo "<br />"; # string
      $var3 = (int) $var1;
      echo gettype($var3); echo "<br />"; # int
    ?>

    <?php echo is_array($var1); ?><br />
    <?php echo is_bool($var1); ?><br />
    <?php echo is_float($var1); ?><br />
    <?php echo is_int($var1); ?><br />
    <?php echo is_null($var1); ?><br />
    <?php echo is_numeric($var1); ?><br />
    <?php echo is_string($var1); ?><br />

  </body>
</html>
