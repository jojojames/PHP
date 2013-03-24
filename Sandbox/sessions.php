<?php 
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Sessions</title>
  </head>
  <body>
    <?php 
      $_SESSION['first_name'] = "james";
      $_SESSION['last_name'] = "nguyen"
    ?>

    <?php 
      $name = $_SESSION['first_name'] . " " . $_SESSION['last_name'];
      echo $name;
    ?>

  </body>
</html>
