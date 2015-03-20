<?php
	if (isset($_GET['shoe']) && isset($_GET['size']) && isset($_GET['amount']) && isset($_GET['price'])){
		$shoe = $_GET['shoe'];
		$size = $_GET['size'];
		$amount = $_GET['amount'];
		$price = $_GET['price'];

		if (empty($shoe) || empty($size) || empty($amount) || empty($price)){
			echo 'Porfavor ingrese todo los campos!';
		}

		else if (!is_numeric($price)){
			echo 'Porfavor ingrese numerico en el campo de \'Precio\'';
		}
	}
	
?>