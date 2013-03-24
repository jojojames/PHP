<?php setcookie('test', 45, time()+(60*60*24*7))?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Cookies</title>
  </head>
  <body>
    Remember: setting cookies MUST happen before any HTML is turned on.

    <!-- <?php setcookie('test', 45, time()+(60*60*24*7))?> -->

    <?php 
      $var1 = 0;
      if (isset($_COOKIE['test'])) {
        $var1 = $_COOKIE['test'];
      }
      echo $var1;
    ?>
  </body>
</html>
