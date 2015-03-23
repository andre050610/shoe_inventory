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
	include 'earning/earning_report.php';
?>
			</div>
			<div id="order">
				<table id="earning">
					<tr>
						<td class="header">Estilo</td>
						<td class="header">Calzado</td>
						<td class="header">Precio</td>
						<td class="header">Inversion</td>
						<td class="header">Ganansia</td>
					</tr>
					<tr>
						<td>
<?php 
	if (empty($date_begin) || empty($date_end))
		echo '-------';
?>
						</td>
						<td>
<?php 
	if (empty($date_begin) || empty($date_end))
		echo '-------';
?>
						</td>
						<td>
<?php 
	if (empty($date_begin) || empty($date_end))
		echo '-------';
?>
						</td>
						<td>
<?php 
	if (empty($date_begin) || empty($date_end))
		echo '-------';
?>
						</td>
						<td>
<?php 
	if (empty($date_begin) || empty($date_end))
		echo '-------';
?>
						</td>
					</tr>	
				</table>
		</div>		
	</div>
	<div id="inventory_display">
		<div id="btn_inventory">Inventario</div>
		<table id="inventory_tble">
			<tr id="title">
				<th id="title">Inventario</th>
			</tr>
			<tr>
				<th class="header">Estilo</th>
				<th class="header">Calzado</th>
				<th class="header">Inversion</th>
			</tr>
<?php 
	require 'inc/inventory.inc.php';
?>
		</table>
	</div>
	<footer></footer>
</body>
</html>