<?php 
  /*
   *This is how you redirection a page
   *header("HTTP/1.0 404 Not Found");
   */
  /*header("Location: basic.html");*/
  /*exit;*/
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Headers</title>
  </head>
  <body>

    <?php 
      header("Location: basic.html");
      exit;
    ?>

  </body>
</html>
