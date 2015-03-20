<?php
	require "inc/connect_mysqli.inc.php";

	if ($query ="SELECT style FROM styles"){
		if ($query_run = mysqli_query($conn, $query)){
			$query_num_rows = mysqli_num_rows($query_run);

			if ($query_num_rows > 0){
				while($row = mysqli_fetch_assoc($query_run)){
					echo '<option value="'.$row['style'].'">'.$row['style'].'</option>';
				}
				
			}

			else {
				echo '0 results';
			}
		}
	}

	else {
		echo "Query No Sirve";
	}

	echo '---------------yesssss!';
	
?>