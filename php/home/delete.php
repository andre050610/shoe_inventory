<?php
	require 'inc/connect_mysqli.inc.php';

	if (!$query = "DELETE FROM temp_inventory"){
			echo 'Error en el Query';
	}

	else {
		$query_run = mysqli_query($conn, $query);
	}
?>