<?php
	session_start();

	require '../inc/connect_mysqli.inc.php';

	$image = $_SESSION['image_del'];

	if (isset($_GET['delete_img'])){
		foreach($_GET['delete_img'] as $checked){ 
			if ($query = "SELECT image_name FROM images WHERE image_name = '$image[$checked]'"){
				if (!$query_run = mysqli_query($conn, $query)){
					echo 'MySQL Error: ' . mysqli_error();
				}

				while ($row = mysqli_fetch_assoc($query_run)){
					echo $img_name = $row['image_name'];

					if ($query = "DELETE FROM images WHERE image_name = '$img_name'"){
						$query_run = mysqli_query($conn, $query);
					}
				}
			}

			else {
				echo 'Error en query!';
			}
		}
	}

	header('Location: ../home.php');
?>