<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Form Processing</title>
  </head>
  <body>
    <?php 
      # Forms don't need to be decoded or encoded.
      $username = $_POST['username'];
      $password = $_POST['password'];
      echo "{$username}: {$password}";
    ?>

  </body>
</html>
