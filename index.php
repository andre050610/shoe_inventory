<?php
	require 'php/inc/core.inc.php';
	require 'php/inc/connect.inc.php';
?>	

<!DOCTYPE html>
<html>
<head>
	<title>Pagina Login</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/main/main.css">
	<link rel="stylesheet" type="text/css" href="css/login/login.css">
</head>
<body>
	<div id="main_div"></div>
	<div id="login">
		<form action="<?php echo $current_file; ?>" method="POST">
			<span>Usuario</span>
			<input id="username" name="username" type="text"><br/><br/>
			<span>Password</span>
			<input id="password" name="password" type="password"><br/><br/>
			<button id="login_btn" type="submit">Login</button>
		</form>
	</div>
	<div id="login_verify">
<?php

	if (isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])){
		header('Location: php/home.php');
	}

	else{
		include 'php/inc/login.inc.php';
	}
?>
	</div>
</body>
</html>
