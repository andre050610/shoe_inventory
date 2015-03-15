<!DOCTYPE html>
<html>
<head>
	<title>Informes De Tenis</title>
	<link rel="stylesheet" type="text/css" href="../css/main/main.css">
	<link rel="stylesheet" type="text/css" href="../css/main/header.css">
	<link rel="stylesheet" type="text/css" href="../css/main/menu.css">
	<link rel="stylesheet" type="text/css" href="../css/sale/sale.css">
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
			<a class="menu" href="#">
				<li>Nuevo Producto</li>
			</a>
			<a class="menu" href="#">
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
?>
				</select><br/><br/>
				<span>Calzado</span>
				<select name="size" id="size" class="sale">
					<option label=""></option>
					<option value="three">3-6</option>
					<option value="six">6-9</option>
					<option value="twelve">12-14</option>
					<option value="fifthteen">15-17</option>
					<option value="eighteen">18-21</option>
				</select><br/><br/>
				<span>Cantidad</span>
				<select name="amount" id="amount" class="sale">
					<option label=""></option>
					<option value="one">1</option>
					<option value="two">2</option>
					<option value="three">3</option>
					<option value="four">4</option>
					<option value="five">5</option>
					<option value="six">6</option>
					<option value="seven">7</option>
					<option value="eight">8</option>
					<option value="nine">9</option>
					<option value="ten">10</option>
				</select><br/><br/>
				<span id="price">Precio</span><span>$</span>
				<input type="text" id="price" name="price" class="sale" maxlength="10"><br/><br/>
				<button class="btn" id="submit" type="submit">Guardar</button>
				<button class="btn" type="reset">Reajustar</button>
			</form>
			<div id="verify_sale">
<?php
	include 'sale_form/sale_report.php';
?>
			</div>
			<div id="order">
				<table>
					<tr>
						<td class="header">Estilo</td>
						<td class="header">Calzado</td>
						<td class="header">Cantidad</td>
						<td class="header">Precio</td>
					</tr>
					<tr>
						<td>
<?php 
	if (!empty($shoe) && !empty($size) && !empty($amount) && !empty($price))
		echo $shoe;
?>
						</td>
						<td>
<?php 
	if (!empty($shoe) && !empty($size) && !empty($amount) && !empty($price))
		echo $size; 
?>
						</td>
						<td>
<?php 
	if (!empty($shoe) && !empty($size) && !empty($amount) && !empty($price)) 
		echo $amount; 
?>
						</td>
						<td>
<?php 
	if (!empty($shoe) && !empty($size) && !empty($amount) && !empty($price)) 
		echo $price; 
?>
						</td>
					</tr>	
				</table>
			</div>
			<form id="correct" action="#">
			<span id="correct">Esta correcto la orden?</span><br/><br/>
			<button class="btn" id="correct" type="Submit">Si</button>
			<button class="btn" type="Submit">No</button>
		</form>
		</div>
	</div>
	<footer></footer>
</body>
</html>