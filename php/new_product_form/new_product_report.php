<?php
	if (isset($_GET['shoe']) && isset($_GET['size']) && isset($_GET['retail'])){
		$shoe = $_GET['shoe'];
		$size = $_GET['size'];
		$retail = $_GET['retail'];

		$shoe = strtoupper($shoe);

		if (empty($shoe) || empty($size) || empty($retail)){
			echo 'Porfavor ingrese todo los campos!';
		}

		else if (!is_numeric($retail)){
			echo 'Porfavor ingrese numerico en el campo de \'Precio\'';
		}
	}
	
?>