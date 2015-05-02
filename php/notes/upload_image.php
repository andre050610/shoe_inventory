<?php
	require 'inc/connect_mysqli.inc.php';

	if (isset($_POST['upload'])) {
		$image_name = $_FILES['image']['name'];
		$image_type = $_FILES['image']['type'];
		$image_size = $_FILES['image']['size'];
		$image_tmp_name = $_FILES['image']['tmp_name'];

		if ($image_name == ''){
			echo 'Porfavor ingrese una nota!';
		}

		else {
			if(move_uploaded_file($image_tmp_name, '../images/uploaded_images/'.$image_name)){
				if ($query = "INSERT INTO images (image_name) 
					VALUE ('$image_name')"){
					if (!$query_run = mysqli_query($conn, $query)){
						echo 'Error in connecting with query!';
					}
				}

				else {
					echo 'Error en query!';
				}	
			}
		}
	}
	
?>