<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Forms</title>
</head>
<body>
  <!-- Send information to process.php -->
  <form action="process.php" method="post">
    Username: <input type="text" name="username" value="" /><br />

    Password: <input type="password" name="password" value="" /><br />

    <input type="submit" name="submit" value="Submit" />
  </form>
</body>
</html>
