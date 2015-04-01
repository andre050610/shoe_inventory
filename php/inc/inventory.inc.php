<?php
	require 'inc/connect_mysqli.inc.php';

	$row_style = array();
	$row_size = array();
	$row_retail = array();

	if (!$query = "SELECT * FROM inventory WHERE sold IS NULL ORDER BY style ASC"){
		echo 'Error en el Query';
	}

	else {
		if ($query_run = mysqli_query($conn, $query)){
			$query_num_rows = mysqli_num_rows($query_run);

			if ($query_num_rows > 0){
				$count = 0;
				while ($row = mysqli_fetch_assoc($query_run)){
					echo '<tr>
							<td class="inventory"><input type="checkbox" value="'.$count.'" name="delete[]"></td>
							<td class="inventory">'.$row['style'].'</td>
							<td class="inventory">'.$row['size'].'</td>
							<td class="inventory">$'.$row['retail'].'</td>
						</tr>';
					$count++;

					array_push($row_style, $row['style']);
					array_push($row_size, $row['size']);
					array_push($row_retail, $row['retail']);
				}

				$_SESSION['style_del'] = $row_style;
				$_SESSION['size_del'] = $row_size;
				$_SESSION['retail_del'] = $row_retail;
			}
		}
	}
?>