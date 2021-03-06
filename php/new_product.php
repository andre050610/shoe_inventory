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
	<link rel="stylesheet" type="text/css" href="../css/new_product/new_product.css">
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
			<a class="menu" href="notes.php">
				<li>Notas</li>
			</a>
		</ul>
		<div id="new">	
			<h1>Nuevo Producto</h1><br/>
			<form action="#" method="GET">
				<span>Estilo</span>
				<input type="text" id="shoe" name="shoe" class="new"><br/><br/>
				<span>Calzado</span>
				<select name="size" id="size" class="new">
					<option label=""></option>
					<option value="3-6">3-6</option>
					<option value="6-9">6-9</option>
					<option value="12-14">12-14</option>
					<option value="15-17">15-17</option>
					<option value="18-21">18-21</option>
				</select><br/><br/>
				<span>Cantidad</span>
				<select name="amount" id="amount" class="new">
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
					<option value="11">11</option>
					<option value="12">12</option>
					<option value="13">13</option>
					<option value="14">14</option>
					<option value="15">15</option>
				</select><br/><br/>
				<span id="retail">Inversion</span><span>$</span>
				<input type="text" id="retail" name="retail" class="new"><br/><br/><br/>
				<button class="btn" id="submit" type="submit">Guardar</button>
				<button class="btn" type="reset">Reajustar</button>
			</form>
			<div id="verify_new">
<?php
	include 'new_product_form/new_product_report.php';
	$correct = false;
?>
			</div>
			<div id="order">
				<table id="new">
					<tr>
						<td class="header">Estilo</td>
						<td class="header">Calzado</td>
						<td class="header">Inversion</td>
					</tr>
					<tr>
						<td>
<?php 
	if (empty($shoe) || empty($size) || empty($retail) || empty($amount))
		echo '-------';
?>
						</td>
						<td>
<?php 
	if (empty($shoe) || empty($size) || empty($retail) || empty($amount))
		echo '-------';
?>
						</td>
						<td>
<?php 
	if (!empty($shoe) && !empty($size) && !empty($retail) && !empty($amount)){
		if (is_numeric($retail)){
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
					</tr>	
<?php
	include 'new_product_form/temp_inventory.php';
?>
				</table>
			</div>
<?php
	if ($correct){
		include 'new_product_form/verify_form.php';
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
