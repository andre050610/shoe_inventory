<?php
	$retail_total = 0;
	$sale_total = 0;
	$grand_total = 0;
	$total_earn = 0;

	if ($proceed){
		require "inc/connect_mysqli.inc.php";

		if (!$query = "SELECT * FROM inventory WHERE date_sold <= '$date_end' AND date_sold >= '$date_begin' ORDER BY date_sold ASC"){
			echo 'Query not working...';
		}

		else {
			if ($query_run = mysqli_query($conn, $query)){
				$mysqli_num_rows = mysqli_num_rows($query_run);

				$header = true;
				$start = true;
				$date_2 = '';
				if ($mysqli_num_rows == 0){
					table_row($mysqli_num_rows, $header, $start, 0,0,0,0,0,0,0);
				}

				else if ($mysqli_num_rows > 0){
					while($row = mysqli_fetch_assoc($query_run)){
						$date_1 = $row['date_sold'];
						$shoe = $row['style'];
						$size = $row['size'];
						$retail = $row['retail'];
						$sale = $row['sale'];
						$earning = $row['sale'] - $row['retail'];

						if ($date_1 == $date_2){
							$header = false;
						}

						else {
							$header = true;
						}

						table_row($mysqli_num_rows, $header, $start, $date_1, $shoe, $size, $retail, $sale, $earning, $retail_total, $sale_total, $total_earn);
						$date_2 = $date_1;
						$start = false;
						$retail_total += $retail;
						$sale_total += $sale;
						$total_earn += $earning;
						$grand_total += $earning;
					}

					echo '<tr>
							<td>------------------</td>
							<td>----------------------</td>
							<td>-------------------------</td>
							<td>---------------------</td>
							<td>------------------------</td>
						</tr>
						<tr>
							<td></td>
							<td>TOTAL</td>
							<td>$'.$retail_total.'</td>
							<td>$'.$sale_total.'</td>
							<td>~$'.$total_earn.'~</td>
						</tr>
						<tr>
							<td></td>
							<td></td>
							<td><h2>GRAN TOTAL</h2></td>
							<td><h2>$'.$grand_total.'</h2></td>
							<td></td>
						</tr>';
				}
			}
		}
	}


	function table_row($rows, $header, $start, $date, $shoe, $size, $retail, $sale, $earning, $r_total, $s_total, $total){
		if ($rows > 0 && $header){
			if ($start != true){
				echo '<tr>
						<td>------------------</td>
						<td>----------------------</td>
						<td>-------------------------</td>
						<td>---------------------</td>
						<td>------------------------</td>
					</tr>
					<tr>
						<td></td>
						<td>TOTAL</td>
						<td>$'.$r_total.'</td>
						<td>$'.$s_total.'</td>
						<td>~$'.$total.'~</td>
					</tr>';
				global $retail_total;
				global $sale_total;
				global $total_earn;
				$total_earn = 0;
				$retail_total = 0;
				$sale_total = 0;
			}

			echo '<tr>
					<td></td>
					<td></td>
					<td><h3 id="date">'.$date[8].$date[9].'-'.$date[5].$date[6].'-'.$date[0].$date[1].$date[2].$date[3].'</h3></td>
					<td></td>
					<td></td>
				</tr>';
		}

		if ($header){
			echo '<tr>
					<td class="header">Estilo</td>
					<td class="header">Calzado</td>
					<td class="header">Inversion</td>
					<td class="header">Precio</td>
					<td class="header">Ganansia</td>
				</tr>';
		}
		
		echo '<tr>';

		if ($rows == 0){
			for ($int = 0; $int < 5; $int++){
				echo '<td>-------</td>';
			}

		}

		if ($rows > 0){
			echo '<td>'.$shoe.'</td>
				<td>'.$size.'</td>
				<td>$'.$retail.'</td>
				<td>$'.$sale.'</td>
				<td id="left">$'.$earning.'</td>';
		}
		
		echo '</tr>';			
	}
?>
	

