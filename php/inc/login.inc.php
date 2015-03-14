<?php
	if (isset($_POST['username']) && isset($_POST['password'])){
		$username = $_POST['username'];
		$password = $_POST['password'];

		$password_hash = md5($password);

		if (!empty($username) && !empty($password)){
			if (!$query = "SELECT id FROM login WHERE username = '$username' AND password = '$password'"){
				echo 'Error en el Query';
			}

			if ($query_run = mysql_query($query)){
				$query_num_rows = mysql_num_rows($query_run);

				if ($query_num_rows == 0){
					echo 'Usuario o Password invalido!';
				}

				else if ($query_num_rows == 1) {
					$user_id = mysql_result($query_run, 0, 'id');
					$_SESSION['user_id'] = $user_id;
					header('Location: index.php');					
				}
			}
		}

		else{
			echo 'Porfavor ingrese su Usuario y Password!';
		}
	}
?>