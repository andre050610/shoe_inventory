<!DOCTYPE html>
<html>
<head>
	<title>Informes De Tenis</title>
	<link rel="stylesheet" type="text/css" href="../css/main/main.css">
	<link rel="stylesheet" type="text/css" href="../css/main/header.css">
	<link rel="stylesheet" type="text/css" href="../css/main/menu.css">
	<link rel="stylesheet" type="text/css" href="../css/home/home.css">
	<script type="text/javascript" src="../js/jquery/jquery2.js"></script>
	<script type="text/javascript" src="../js/jquery/jquery-ui.js"></script>
	<script type="text/javascript" src="../js/menu/menu.js"></script>
</head>
<body>
	<div id="main_div_2"></div>
	<div id="header"> 
		<div id="logo_name"><h1>Katy Shoes</h1></div>
		<a id="logout" href="logout.php" style="color: white"><img id="logoff" src="../images/logoff_btn.png"></a>	
	</div>
	<div id="info">
		<ul>
			<a class="menu" href="sale.php">
				<li>Venta</li>
			</a>
			<a class="menu" href="new_product.php">
				<li>Nuevo Producto</li>
			</a>
			<a class="menu" href="#">
				<li>Ganansias</li>
			</a>
			<a class="menu" href="#">
				<li>Notas</li>
			</a>
		</ul>
		<div id="home_img"></div>
	</div>
</body>
</html>
<?php
	require 'home/delete.php';
?>