<?php
	require 'inc/connect_mysqli.inc.php';

	$pass = false;

	if ($correct){
		for ($count = 0; $count < $amount; $count++){
			if (!$query = "INSERT INTO temp_inventory (shoe, size, retail)
							VALUE ('$shoe', '$size', '$retail')"){
				echo 'Error en el Query';
			}

			else {
				if ($query_run = mysqli_query($conn, $query)){
					$pass = true;
				}

				else {
						$pass = false;
						echo "Query No Sirve";
					}
			}
		}

		if ($pass){
			if (!$query = "SELECT * FROM temp_inventory"){
				echo 'Error en el Query';
			}

			else {
				if ($query_run = mysqli_query($conn, $query)){
					$query_num_rows = mysqli_num_rows($query_run);

					if ($query_num_rows > 0){
						while ($row = mysqli_fetch_assoc($query_run)){
							echo '<tr>
									<td>'.$row['shoe'].'</td>
									<td>'.$row['size'].'</td>
									<td>$'.$row['retail'].'</td>
								</tr>';
						}
					}

					else {
						echo '0 results';
					}
				}
			}
		}
	}
?>

