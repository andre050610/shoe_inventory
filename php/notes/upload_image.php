<?php
	require 'inc/connect.inc.php';

	if (!isset($_FILES['image'])) {
		echo 'Porfavor ingrese una nota!';
	}

	elseif ($_FILES['image']['tmp_name']){
				// Gets the raw date from the uploaded file
		$image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
		$image = base64_encode($image);	
			// Gets the file name from the uploaded file
		$image_name = addslashes($_FILES['image']['name']);
			// Gets the size of the uploaded file
		$image_size = getimagesize($_FILES['image']['tmp_name']);

			// Checks if its an image by checking the size
		if ($image_size == false){
			echo 'Este directorio no es una imagen...';
		}

		else {
			if (!$query = "INSERT INTO images VALUES ('','$image_name','$image')"){
				echo "Query not working...";
			}

			else {
				$query_run = mysql_query($query);
				$lastid = mysql_insert_id();
				echo 'Ya se guardo la nota!';
			}	
		}
	}

	else {
		echo 'Porfavor ingrese una nota!';
	}
?>