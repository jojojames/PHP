<!-- Basic Boolean -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Booleans and NULL</title>
  </head>
  <body>
    <?php
      $bool1 = true; # case insensitive
      $bool2 = false;
    ?>

    $bool1: <?php echo $bool1; ?><br />
    $bool2: <?php echo $bool2; ?><br />

    <br />
    <?php 
      $var1 = 3;
      $var2 = "cat";
      $var4 = 0;
    ?>

    <!-- var1 and var2 is set -->
    $var1 is set: <?php echo isset($var1); ?><br />
    $var2 is set: <?php echo isset($var2); ?><br />
    $var3 is set: <?php echo isset($var3); ?><br />

    <?php unset($var1); ?>
    <!-- Only var2 is set -->
    $var1 is set: <?php echo isset($var1); ?><br />
    $var2 is set: <?php echo isset($var2); ?><br />
    $var3 is set: <?php echo isset($var3); ?><br />
    <br />
    $var1 empty: <?php echo empty($var1); ?><br />
    $var4 empty: <?php echo empty($var4); ?><br />
  </body>
</html>
