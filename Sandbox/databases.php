<?php 
  // 1. Create a database connection
  $connection = mysql_connect("localhost", "root", "");
  if (!$connection) {
    die ("Database Connection Failed: " . mysql_error());
  }

  // 2. Select a database to use 
  $db_select = mysql_select_db("widget_corp", $connection);
  if (!db_select) {
    die ("Database Selection Failed: " . mysql_error());
  }

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>
  <body>
    <?php 
      // 3. Perform database query
      $result = mysql_query("SELECT * FROM subjects", $connection);
      if (!result) {
        die ("Database query failed: " . mysql_error());
      }

      // 4. Use Returned Data 
      while ($row = mysql_fetch_array($result)) {
        //echo $row[1]. " ".$row[2]."<br />";
        # Either one works.
        echo $row["menu_name"]. " ".$row["position"]."<br />";

      }
    ?>
  </body>
</html>

<?php 
  // 5. Close the Connection
  mysql_close($connection);
?>
