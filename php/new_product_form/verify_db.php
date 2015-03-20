<?php
	require '../../php/inc/connect_mysqli.inc.php';

	$process = false;

	if (!$query = "SELECT * FROM temp_inventory"){
		echo 'Error en el Query';
	}

	else {
		if ($query_run_temp = mysqli_query($conn, $query)){
			$query_num_rows = mysqli_num_rows($query_run_temp);

			if ($query_num_rows > 0){
				while ($row = mysqli_fetch_assoc($query_run_temp)){

					$shoe = $row['shoe'];
					$size = $row['size'];
					$retail = $row['retail'];

					if (!$query = "SELECT * FROM styles WHERE style = '$shoe'"){
						echo 'Error en el Query';
					}

					else {
						if ($query_run = mysqli_query($conn, $query)){
							$query_num_rows = mysqli_num_rows($query_run);

							if ($query_num_rows == 0){
								if (!$query = "INSERT INTO styles (style)
												VALUES ('$shoe')"){
									echo 'Error en el Query';
								}

								else {
									if ($query_run = mysqli_query($conn, $query)){
										$process = true;
									}
								}
							}

							else if ($query_num_rows >= 1){
								$process = true;
							}
						}
					}

					if ($process){
						if (!$query = "INSERT INTO inventory (style, size, retail)
										VALUES ('$shoe', '$size', $retail)"){
							echo 'Error en el Query';
						}

						else {
							if (!$query_run = mysqli_query($conn, $query)){
								echo '<h1>
										Error!!!!! No Se Agrego Al Inventario...		
									</h1>';
								$process = false;
							}
						}
					}
				}
			}
		}
	}

	if ($process){
		echo '<h1>
				Se Agrego Al Inventario...		
			</h1>';
	}

?>


