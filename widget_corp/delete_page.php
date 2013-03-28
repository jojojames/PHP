<?php require_once("includes/connection.php"); ?>
<?php require_once("includes/functions.php"); ?>
<?php 
  if (intval($_GET['page']) == 0) {
    redirect_to("content.php");
  }

  $id = mysql_prep($_GET['page']);
  $query = "DELETE FROM pages WHERE id = {$id} LIMIT 1";
  $result = mysql_query($query, $connection);

  if ($page = get_page_by_id($id)) {
    if (mysql_affected_rows() == 1) {
      redirect_to("content.php");
    } else {
      // Deletion Failed
      echo "<p>Page deletion failed. </p>";
      echo "<p>" . mysql_error() . "</p>";
      echo "<a href=\"content.php\">Return to Main Page</a>";
    }
  } else {
    // subject didn't exist
    redirect_to("content.php");
  }
?>
<?php mysql_close($connection); ?>
