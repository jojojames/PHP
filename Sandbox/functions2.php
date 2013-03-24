<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Functions2</title>
</head>
<body>
  <?php 
    // using globals
    $bar = "outside";
    function foo() {
      global $bar;
      $bar = "inside";
    }
    foo();
    echo $bar . "<br />";
  ?>


  <br />

  <?php 
    # using local variables, arguments and return values
    $bar = "outside";
    function foo2($var) {
      $var = "inside";
      return $var;
    }
    $bar = foo2($bar);
    echo $bar . "<br />";
  ?>

  <?php 
    # default variables
    function paint($room="office", $color="red") {
      echo "The color of the {$room} is {$color}.";
    }
    paint("bedroom", "blue");
    paint();
  ?>
  
</body>
</html>
