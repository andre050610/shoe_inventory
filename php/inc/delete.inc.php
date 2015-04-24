<?php
	session_start();

	require 'connect_mysqli.inc.php';

	$style = $_SESSION['style_del'];
	$size = $_SESSION['size_del'];
	$retail = $_SESSION['retail_del'];

	if (isset($_GET['delete'])){
		foreach($_GET['delete'] as $checked){ 
			if ($query = "SELECT id FROM inventory WHERE style = '$style[$checked]' AND size = '$size[$checked]' AND retail = '$retail[$checked]' AND sold IS NULL"){
				$query_run = mysqli_query($conn, $query);

				while ($row = mysqli_fetch_assoc($query_run)){
					$id = $row['id'];

					if ($query = "DELETE FROM inventory WHERE id = '$id'"){
						$query_run = mysqli_query($conn, $query);
					}
				}
			}
		}
	}

	header('Location: ../home.php');
?>
