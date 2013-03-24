<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>First Page</title>
  </head>
  <body>
    <?php 
      $linktext = "<Click> & you'll see";
    ?>
    <a href="secondpage.php?name=<?php echo urlencode ( "james&" ); ?>&id=2">
      <?php echo htmlspecialchars($linktext); ?>
    </a>
  </body>
</html>
