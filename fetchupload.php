<?php

include 'connect.php';
	
$sql = "SELECT uploads FROM uploads";
$result = mysqli_query($conn1, $sql);

	if (mysqli_num_rows($result) > 0) {
		// output data of each row
		while($row = mysqli_fetch_assoc($result)) {
			$item = '<div class="item">
					<img class="img-responsive img-full" src="'.$row['uploads'].'">
				 </div>';
			echo $item;
		}
	}

?>