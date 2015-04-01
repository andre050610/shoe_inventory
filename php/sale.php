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
	<link rel="stylesheet" type="text/css" href="../css/sale/sale.css">
	<link rel="stylesheet" type="text/css" href="../css/main/inventory.css">
	<script type="text/javascript" src="../js/jquery/jquery2.js"></script>
	<script type="text/javascript" src="../js/jquery/jquery-ui.js"></script>
	<script type="text/javascript" src="../js/menu/menu.js"></script>
	<script type="text/javascript" src="../js/sale/sale.js"></script>
	<script type="text/javascript" src="../js/inventory/inventory.js"></script>
</head>
<body>
	<div id="main_div_2" style="height: 750px"></div>
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
		<div id="sale">
			<h1>Venta</h1><br/>
			<form action="#" method="GET">
				<span>Estilo</span>
				<select name="shoe" id="shoe" class="sale">
					<option label=" "></option>
<?php
	include 'sale_form/style.php';
	$correct = false;
?>
				</select><br/><br/>
				<span>Calzado</span>
				<select name="size" id="size" class="sale">
					<option label=""></option>
					<option value="3-6">3-6</option>
					<option value="6-9">6-9</option>
					<option value="12-14">12-14</option>
					<option value="15-17">15-17</option>
					<option value="18-21">18-21</option>
				</select><br/><br/>
				<span>Cantidad</span>
				<select name="amount" id="amount" class="sale">
					<option label=""></option>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
					<option value="6">6</option>
					<option value="7">7</option>
					<option value="8">8</option>
					<option value="9">9</option>
					<option value="10">10</option>
				</select><br/><br/>
				<span id="price">Precio</span><span>$</span>
				<input type="text" id="price" name="price" class="sale" maxlength="10"><br/><br/>
				<span>Fecha</span>
				<input type="date" id="date" name="date" class="sale"><br/><br/><br/>
				<button class="btn" id="submit" type="submit">Guardar</button>
				<button class="btn" type="reset">Reajustar</button>
			</form>
			<div id="verify_sale">
<?php
	include 'sale_form/sale_report.php';
?>
			</div>
			<div id="order">
				<table id="sale">
					<tr>
						<td class="header">Estilo</td>
						<td class="header">Calzado</td>
						<td class="header">Cantidad</td>
						<td class="header">Precio</td>
						<td class="header">Fecha</td>
					</tr>
					<tr>
						<td>
<?php 
	if (!empty($shoe) && !empty($size) && !empty($amount) && !empty($price) && !empty($date))
		echo $shoe;
	else {
		echo '-------';
	}
?>
						</td>
						<td>
<?php 
	if (!empty($shoe) && !empty($size) && !empty($amount) && !empty($price) && !empty($date))
		echo $size; 
	else {
		echo '-------';
	}
?>
						</td>
						<td>
<?php 
	if (!empty($shoe) && !empty($size) && !empty($amount) && !empty($price) && !empty($date)) 
		echo $amount; 
	else {
		echo '-------';
	}
?>
						</td>
						<td>
<?php 
	if (!empty($shoe) && !empty($size) && !empty($amount) && !empty($price) && !empty($date)){
		if (is_numeric($price)){
			echo '$'.$price;
			$correct = true;
		}

		else {
			echo 'N/A';
		} 
	}
	else {
		echo '-------';
	}
?>
						</td>
						<td>
<?php
	if (!empty($shoe) && !empty($size) && !empty($amount) && !empty($price) && !empty($date))
		echo $date[8].$date[9].'-'.$date[5].$date[6].'-'.$date[0].$date[1].$date[2].$date[3]; 
	else {
		echo '-------';
	}
?>
						</td>
					</tr>	
				</table>
			</div>
<?php
	if ($correct){
		include 'sale_form/verify_form.php';
	}
?>
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
				</tr>
			</table>
		</form>
	</div>
	<footer></footer>
</body>
</html>