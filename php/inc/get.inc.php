<?php
	require 'connect.inc.php';

	$id = addslashes($_REQUEST['id']);

	if (!$query = ("SELECT * FROM images")){
		echo 'Error en el Query';
	}

	else {
		if ($query_run = mysql_query($query)){
			while ($image = mysql_fetch_assoc($query_run)){

			}
		}
	}
?>