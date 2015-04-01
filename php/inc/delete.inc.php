<?php
	session_start();

	require 'connect_mysqli.inc.php';

	$style = $_SESSION['style_del'];
	$size = $_SESSION['size_del'];
	$retail = $_SESSION['retail_del'];

	if (isset($_GET['delete'])){
		foreach($_GET['delete'] as $checked){
			if ($query = "DELETE FROM inventory WHERE style = '$style[$checked]' AND size = '$size[$checked]' AND retail = '$retail[$checked]'"){
				$query_run = mysqli_query($conn, $query);
			}
		}
	}

	header('Location: ../home.php');
?>
