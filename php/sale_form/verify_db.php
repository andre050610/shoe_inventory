<?php
	require '../../php/inc/connect_mysqli.inc.php';

	session_start();

	$shoe = $_SESSION['shoe'];
	$size = $_SESSION['size'];
	$amount = $_SESSION['amount'];
	$price = $_SESSION['price'];
	$date = $_SESSION['date'];

	if (!empty($shoe) && !empty($size) && !empty($amount) && !empty($price)){
		if (!$query = "SELECT * FROM inventory WHERE style = '$shoe' AND size = '$size' AND sold IS NULL"){
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

				else if ($query_num_rows >= 1){
					if ($query_num_rows >= $amount){
						if (!$query = "UPDATE inventory SET sold = 'SOLD', sale = '$price', date_sold = '$date' WHERE style = '$shoe' AND size = '$size' AND sold IS NULL LIMIT $amount"){
							echo 'Error en el Query';
						}

						else {
						 	if ($query_run = mysqli_query($conn, $query)){
						 		echo '<h1>
										Venta Esta Procesando...		
									</h1>';
						 	}

						 	else {
						 		echo mysqli_error($conn);
						 		echo "Not Working";
						 	}
						}
					}
					
					else {
						echo '<h1>
								No Tienes '.$amount.' Pares En Tu Inventario!
							</h1>';

						if ($query_num_rows == 1){
							echo '<h1>
									Solo Tienes '.$query_num_rows.' Par...
								</h1>';
						}

						else {
							echo '<h1>
									Solo Tienes '.$query_num_rows.' Pares...
								</h1>';
						}
					}
				}
			}
		}
	}
	
?>	