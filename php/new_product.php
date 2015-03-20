<!DOCTYPE html>
<html>
<head>
	<title>Informes De Tenis</title>
	<link rel="stylesheet" type="text/css" href="../css/main/main.css">
	<link rel="stylesheet" type="text/css" href="../css/main/header.css">
	<link rel="stylesheet" type="text/css" href="../css/main/menu.css">
	<link rel="stylesheet" type="text/css" href="../css/new_product/new_product.css">
	<script type="text/javascript" src="../js/jquery/jquery2.js"></script>
	<script type="text/javascript" src="../js/jquery/jquery-ui.js"></script>
	<script type="text/javascript" src="../js/menu/menu.js"></script>
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
			<a class="menu" href="#">
				<li>Ganansias</li>
			</a>
			<a class="menu" href="#">
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
				<span id="retail">Inversion</span><span>$</span>
				<input type="text" id="retail" name="retail" class="new"><br/><br/><br/>
				<button class="btn" id="submit" type="submit">Guardar</button>
				<button class="btn" type="reset">Reajustar</button>
			</form>
			<div id="verify_sale">
<?php
	include 'new_product_form/new_product_report.php';
	$correct = false;
?>
			</div>
			<div id="order">
				<table>
					<tr>
						<td class="header">Estilo</td>
						<td class="header">Calzado</td>
						<td class="header">Inversion</td>
					</tr>
					<tr>
						<td>
<?php 
	if (!empty($shoe) && !empty($size) && !empty($retail)){
		echo $shoe;
	}

	else {
		echo '-------';
	}
?>
						</td>
						<td>
<?php 
	if (!empty($shoe) && !empty($size) && !empty($retail))
		echo $size; 
	else {
		echo '-------';
	}
?>
						</td>
						<td>
<?php 
	if (!empty($shoe) && !empty($size) && !empty($retail)){
		if (is_numeric($retail)){
			echo '$'.$retail;
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
				</table>
			</div>
<?php
	if ($correct){
		include 'new_product_form/verify_form.php';
	}
?>
		</div>
	</div>
	<footer></footer>
</body>
</html>