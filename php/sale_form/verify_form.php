<form id="correct_form" action="sale_form/upload_sale.php">
	<span id="correct">Esta correcto la orden?</span><br/><br/>
	<button class="btn" id="correct" type="Submit">Si</button>
	<button class="btn" id="no_correct" type="button">No</button>
</form>
<?php
	session_start();
	$_SESSION['shoe'] = $shoe;
	$_SESSION['size'] = $size;
	$_SESSION['amount'] = $amount;
	$_SESSION['price'] = $price;
?>