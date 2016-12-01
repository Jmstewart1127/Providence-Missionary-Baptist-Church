<?php
		
include 'connect.php';	
	
	if(isset($_FILES['picfile'])) {
		$info = pathinfo($_FILES['picfile']['name']);
		$ext = $info['extension']; // get the extension of the file
		$newname = rand(10,1000).".".$ext; 

		$target = 'uploadimg/'.$newname;
		move_uploaded_file( $_FILES['picfile']['tmp_name'], $target);
	}
	
	$new_photos = "INSERT INTO uploads (id, uploads)
					VALUES ('', '$target')";
	
	if ($conn2->query($new_photos) == true) {
		echo "Photo uploaded";
		echo '<a href="addnew.html">Go Back</a>';
	}	
	
?>