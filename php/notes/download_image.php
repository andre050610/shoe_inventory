<?php
	session_start();

	require 'inc/connect_mysqli.inc.php';

	$image_num = array();

	if ($query = "SELECT image_name FROM images"){
		if ($query_run = mysqli_query($conn, $query)){
			$query_num_rows = mysqli_num_rows($query_run);

			if ($query_num_rows > 0){
				$count = 0;
				while ($row = mysqli_fetch_assoc($query_run)){
					echo '<input type="checkbox" id="delete" value="'.$count.'" name="delete_img[]">
						<img class="img_click" src=../images/uploaded_images/'.$row['image_name'].' width="200" height="150">
						</br></br>';
					
					$count++;
					array_push($image_num, $row['image_name']);

					$_SESSION['image_del'] = $image_num;
				}
			}

			else {
				echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				No ahi notas en los archivos!';
			}
		}
	}
?>

