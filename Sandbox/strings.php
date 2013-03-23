<!-- Difference between Double and Single Quotes -->
<html>
  <head>
    <title>Strings</title>
  </head>
  <body>
  <?php 
    echo "Hello World<br />";
    echo 'Hello World<br />';
    $my_variable = "Hello World";
    echo $my_variable;
    echo "<br />";
    echo $my_variable . " Again";
  ?>

  <br />
  <?php 
    echo "$my_variable Again.<br />";
    echo "${my_variable} Again.<br />";
    echo '$my_variable Again.<br />'; # Doesn't print out the value of the variable.
  ?>

  </body>
</html>
