<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Array Functions</title>
  </head>
  <body>
    <?php $array1 = array(4, 8, 15, 16, 23, 42); ?>
    Count: <?php echo count($array1); ?> <br />
    Max Value: <?php echo max($array1); ?> <br />
    Min Value: <?php echo min($array1); ?> <br />
    <br />
    Sort: <?php sort($array1); print_r($array1); ?> <br />
    Reverse Sort: <?php rsort($array1); print_r($array1); ?> <br />
    <br />
    Implode: <?php echo $string1 = implode(" * ", $array1); ?> <br />
    Explode: <?php print_r(explode(" * ", $string1)); ?> <br />
    <br />
    In Array: <?php echo in_array(3, $array1); ?> <!-- Returns T/F -->
    <br />
    In Array: <?php echo in_array(4, $array1); ?> <!-- Returns T/F -->
  </body>
</html>
