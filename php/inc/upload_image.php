<?php
	require 'connect.inc.php';

		// File Properties
	$file = $_FILES['image']['tmp_name'];

	if (!isset($file)){
		echo "Please select an image.";
	}

	else {
			// Gets the raw date from the uploaded file
		$image = addslaches(file_get_contents($_FILES['image']['tmp_name']));
			// Gets the file name from the uploaded file
		$image_name = addslaches($_FILES['image']['name']);
			// Gets the size of the uploaded file
		$image_size = getimagesize($_FILES['image']['tmp_name'];

			// Checks if its an image by checking the size
		if ($image_size == false){
			echo 'Este directorio no es una imagen...';
		}

		else {
			if (!$query = "INSERT INTO images VALUES ('','image_name','image')"){
				echo "Query not working...";
			}
			else {
				$query_run = mysql_query($query);
				// Display the image
			}
			
		}
	}
?>