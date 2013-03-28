<?php require_once("includes/connection.php"); ?>
<?php require_once("includes/functions.php"); ?>
<?php
	$errors = array();
	
	// Form Validation
  $required_fields = array('menu_name', 'visible');
	foreach($required_fields as $fieldname) {
		if (!isset($_POST[$fieldname]) || empty($_POST[$fieldname])) {
			$errors[] = $fieldname;
		}
	}

  $fields_with_lengths = array('menu_name' => 30);
  foreach ($fields_with_lengths as $fieldname => $maxlength) {
    if (strlen(trim(mysql_prep($_POST[$fieldname]))) > $maxlength) {
      $errors[] = $fieldname;
    }
  }
	if (!empty($errors)) {
		redirect_to("new_page.php");
	}
?>
<?php
  $menu_name = mysql_prep($_POST['menu_name']);
  $subject_id = ($_POST['subject_id']);
  $position = mysql_num_rows(get_pages_for_subject($subject_id))+1;
	$visible = mysql_prep($_POST['visible']);
?>
<?php
  $query = "INSERT INTO pages (
    menu_name, subject_id, position, visible
  ) VALUES (
    '{$menu_name}', {$subject_id}, {$position}, {$visible}
  )";
	$result = mysql_query($query, $connection);
	if ($result) {
		// Success!
		redirect_to("content.php");
    exit;
	} else {
		// Display error message.
		echo "<p>Page creation failed.</p>";
		echo "<p>" . mysql_error() . "</p>";
	}
?>
<?php mysql_close($connection); ?>
