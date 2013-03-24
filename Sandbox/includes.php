<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Include</title>
  </head>
  <body>
    <?php 
      //include("included_func.php");
      //require("included_func.php"); # same as include but throws an error
      require_once("included_func.php"); # same as require, but only once
    ?>

    <?php 
      hello("Everyone");
    ?>

  </body>
</html>
