<?php
	if (isset($_GET['date_begin']) && isset($_GET['date_end'])){
		$date_begin = $_GET['date_begin'];
		$date_end = $_GET['date_end'];

		if (empty($date_begin) || empty($date_end)){
			echo 'Porfavor ingrese todo los campos!';
		}
	}
	
?>