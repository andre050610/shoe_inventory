<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Informes De Tenis</title>
	<link rel="stylesheet" type="text/css" href="../css/main/main.css">
	<link rel="stylesheet" type="text/css" href="../css/main/header.css">
	<link rel="stylesheet" type="text/css" href="../css/main/menu.css">
	<link rel="stylesheet" type="text/css" href="../css/earning/earning.css">
	<link rel="stylesheet" type="text/css" href="../css/main/inventory.css">
	<script type="text/javascript" src="../js/jquery/jquery2.js"></script>
	<script type="text/javascript" src="../js/jquery/jquery-ui.js"></script>
	<script type="text/javascript" src="../js/menu/menu.js"></script>
	<script type="text/javascript" src="../js/new_product/new.js"></script>
	<script type="text/javascript" src="../js/inventory/inventory.js"></script>
</head>
<body>
	<div id="main_div_2" style="height: 950px"></div>
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
			<a class="menu" href="#">
				<li>Notas</li>
			</a>
		</ul>
		<div id="earning">
			<h1>Venta</h1><br/>
			<form action="#" method="GET">
				<span>Fecha Inicio</span>
				<input type="date" id="date_begin" name="date_begin" class="earn"><br/><br/>
				<span>Fecha Termino</span>
				<input type="date" id="date_end" name="date_end" class="earn"><br/><br/><br/>
				<button class="btn" id="submit" type="submit">Guardar</button>
				<button class="btn" type="reset">Reajustar</button>
			</form>
			<div id="verify_earning">
<?php
	$proceed = false;
	include 'earning/earning_report.php';
?>
			</div>
			<div id="order">
				<table id="earning">
<?php
	include 'earning/earning_table.php';
?>
				</table>
			</div>
			<div id="bottom"></br></br></div>
		</div>		
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
					<td id="delete"><button class="btn" id="delete" type="submit">Borrar</button></td>
					<td></td>
				</tr>
			</table>
		</form>
	</div>
	<footer></footer>
</body>
</html>
