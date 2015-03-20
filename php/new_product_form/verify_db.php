<?php
	require '../../php/inc/connect_mysqli.inc.php';

	session_start();

	$shoe = $_SESSION['shoe'];
	$size = $_SESSION['size'];
	$retail = $_SESSION['retail'];

	$process = false;

	if (!empty($shoe) && !empty($size) && !empty($retail)){
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
				if ($query_run = mysqli_query($conn, $query)){
					echo '<h1>
							Se Agrego Al Inventario...		
						</h1>';
				}

				else {
					echo '<h1>
							Error!!!!! No Se Agrego Al Inventario...		
						</h1>';
				}
			}
		}

	}

?>


