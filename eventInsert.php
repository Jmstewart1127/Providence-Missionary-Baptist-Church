<?php
error_reporting(E_ALL);
include 'connect.php';
echo $link->connect_errno;

if ($link->connect_errno) {
    die('Could not connect: ' . mysqli_error());
}
echo 'Connected successfully';



$name = mysqli_real_escape_string(isset($_POST['eventName']) ? $_POST['eventName'] : 0);
$date = mysqli_real_escape_string(isset($_POST['eventDate']) ? $_POST['eventDate'] : 0);
$description = mysqli_real_escape_string(nl2br(isset($_POST['eventDes']) ? $_POST['eventDes'] : 0);
$location = mysqli_real_escape_string(isset($_POST['eventLocation']) ? $_POST['eventLocation'] : 0);

$insert = "INSERT INTO events (id, title, description, timeDate, location)
			VALUES ('', '$name', '$description', '$date', '$location')";

if ($link->query($insert) == true) {
	echo "recorded successfully... Thank you!";
}
else {
	echo "error";
}

$link->close();


?>
