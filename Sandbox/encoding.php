<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>First Page</title>
  </head>
  <body>
    <?php 
      $url_page = 'php/created/page/url.php';
      $param1 = 'this is a string';
      $param2 = '"bad"/<>characters$';
      $linktext = "<Click> & you'll see";
    ?>
    <?php 
      // this gives ou a clean link to use
      $url = "http://localhost/";
      $url .= rawurlencode($url_page);
      $url .= "?param1=" . urlencode($param1);
      $url .= "&param2=" . urlencode($param2);

      // htmlspecialchars escapes any html that
      // might do bad things to your html page
    ?>

    <a href="<?php echo htmlspecialchars($url); ?>">
      <?php echo htmlspecialchars($linktext); ?>
    </a>
  </body>
</html>
