<?php
	require 'inc/connect_mysqli.inc.php';

	if (!$query = "SELECT * FROM inventory ORDER BY style ASC"){
		echo 'Error en el Query';
	}

	else {
		if ($query_run = mysqli_query($conn, $query)){
			$query_num_rows = mysqli_num_rows($query_run);

			if ($query_num_rows > 0){
				while ($row = mysqli_fetch_assoc($query_run)){
					echo '<tr>
							<td>'.$row['style'].'</td>
							<td>'.$row['size'].'</td>
							<td>$'.$row['retail'].'</td>
						</tr>';
				}
			}
		}
	}
?>


