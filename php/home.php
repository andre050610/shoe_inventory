<?php
	session_start();
	require 'inc/style_table.inc.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Informes De Tenis</title>
	<link rel="stylesheet" type="text/css" href="../css/main/main.css">
	<link rel="stylesheet" type="text/css" href="../css/main/header.css">
	<link rel="stylesheet" type="text/css" href="../css/main/menu.css">
	<link rel="stylesheet" type="text/css" href="../css/main/inventory.css">
	<link rel="stylesheet" type="text/css" href="../css/home/home.css">
	<script type="text/javascript" src="../js/jquery/jquery2.js"></script>
	<script type="text/javascript" src="../js/jquery/jquery-ui.js"></script>
	<script type="text/javascript" src="../js/menu/menu.js"></script>
	<script type="text/javascript" src="../js/inventory/inventory.js"></script>
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
			<a class="menu" href="earning.php">
				<li>Ganansias</li>
			</a>
			<a class="menu" href="notes.php">
				<li>Notas</li>
			</a>
		</ul>
		<div id="home_img"></div>
	</div>
	<div id="inventory_display">
		<div id="btn_inventory">Inventario</div>
		<form action="inc/delete.inc.php" method="GET">
			<table id="inventory_tble">
				<tr id="title">
					<th></th>
					<th id="title" colspan="2">Inventario</th>
					<th></th>
				</tr>
				<tr>
					<th class="header">Borrar</th>
					<th class="header" id="style">Estilo</th>
					<th class="header" id="size">Calzado</th>
					<th class="header">Inversion</th>
				</tr>
<?php 
	require 'inc/inventory.inc.php';
?>
				<tr>
					<td id="delete"><button class="btn" id="submit" type="submit">Borrar</button></td>
				</tr>
			</table>
		</form>
	</div>
</body>
</html>
<?php
	require 'home/delete.php';
?>