<?php
error_reporting(E_ALL);
include 'connect.php';

if ($link->connect_errno) {
    die('Could not connect: ' . mysqli_error());
}
echo 'Connected successfully';



$name = mysqli_real_escape_string(isset($_POST['name']) ? $_POST['name'] : 0);
$date = mysqli_real_escape_string(isset($_POST['datetime']) ? $_POST['datetime'] : 0);
$location = mysqli_real_escape_string(isset($_POST['location']) ? $_POST['location'] : 0);

$insert = "INSERT INTO guests (id, name, datetime, location)
	   VALUES ('', '$name', '$date', '$location')";

if ($link->query($insert) == true) {
	echo "recorded successfully... Thank you!";
}
else {
	echo "error";
}

$link->close();


?>
