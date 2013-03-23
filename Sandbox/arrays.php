<!-- Basic Arrays -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Arrays</title>
  </head>
  <body>
    <?php $array1 = array(4, 8, 15, 16, 23, 42); ?>
    <?php echo $array1[0]; ?>
    <?php $array2 = array(6, "fox", "dog", array("x", "y", "z")); ?>
    <?php echo $array2[2]; ?> # dog
    <?php echo $array2[2][1]; ?> # Access an array in an array
    <?php $array2[3] = "cat"; ?>
    <?php echo $array2[3]; ?>
    <br />
    <?php echo $array[3]; ?>
    <br />

    <!-- Associative Array -->
    <?php $array3 = array("first_name" => "James", "last_name" => "Nguyen"); ?>
    <?php echo $array3["first_name"]; ?>
    <? echo $array3["first_name"] . " " . $array3["last_name"]; ?>
    <?php $array3["first_name"] = "Larry"; ?>
    <?php echo $array3["first_name"] . " " . $array3["last_name"]; ?>
    <br />

    <pre><?php print_r($array2); ?></pre>

  

  </body>
</html>
