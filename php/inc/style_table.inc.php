<?php
	require 'inc/connect_mysqli.inc.php';

	$styles = array();

	if (!$query = "SELECT style FROM styles"){
		echo 'Wrong query...';
	}

	else {
		if ($query_run = mysqli_query($conn, $query)){
			$query_num_rows = mysqli_num_rows($query_run);

			if ($query_num_rows > 0){
				while($row = mysqli_fetch_assoc($query_run)){
					$style_db = $row['style'];

					array_push($styles, $style_db);
				}
			}
		}
	}

	foreach ($styles as $style_array) {
		if (!$query_two = "SELECT style FROM inventory WHERE style = '$style_array' AND sold IS NULL"){
			die(mysqli_error($query_two));
		}

		else {
			if ($query_run_two = mysqli_query($conn, $query_two)){
					$query_num_rows_two = mysqli_num_rows($query_run_two);

					if ($query_num_rows_two == 0){
						mysqli_query($conn, "DELETE FROM styles WHERE style = '$style_array'");
					}
			}

			else {
				die(mysqli_error($query_run_two));
			}
		}
	}
?>