<?php
	require '../../php/inc/connect_mysqli.inc.php';

	session_start();

	$shoe = $_SESSION['shoe'];
	$size = $_SESSION['size'];
	$amount = $_SESSION['amount'];
	$price = $_SESSION['price'];

	if (!empty($shoe) && !empty($size) && !empty($amount) && !empty($price)){
		if (!$query = "SELECT * FROM inventory WHERE style = '$shoe' AND size = '$size'"){
			echo 'Error en el Query';
		}

		else {
			if ($query_run = mysqli_query($conn, $query)){
				$query_num_rows = mysqli_num_rows($query_run);

				if ($query_num_rows == 0){
					echo '<h1>
							Este Estilo No Existe...		
						</h1>';
				}

				else if ($query_num_rows == 1){
					// Delete from inventory and add to a new 
					// sale table
				}

				else if ($query_num_rows > 1){
					if ($query_num_rows >= $amount){
						// Delete from inventory and add to a new 
						// sale table in a while loop
					}

					else {
						echo '<h1>
								No Tienes '.$amount.' Estilos En Tu Inventario...		
							</h1>';
					}
				}
			}
		}
	}
	
?>	