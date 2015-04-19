<?php
	require 'inc/connect.inc.php';
	
	$id = addcslashes($_REQUEST['id']);

	if (!$query = ("SELECT * FROM images WHERE id='$id'")){
		echo 'Error en el Query';
	}

	else {
		if ($query_run = mysql_query($query)){
			$row = mysql_fetch_assoc($query_run));

			echo $row
		}
	}
?>

