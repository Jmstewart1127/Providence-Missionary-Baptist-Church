<?php

include 'connect.php';
error_reporting(E_ALL);


if ($link->connect_errno) {
    die('Could not connect: ' . mysqli_error());
}
echo 'Connected successfully';


$sermon1 = mysqli_real_escape_string(isset($_POST['sermon1']) ? $_POST['sermon1'] : 0);
$date1 = mysqli_real_escape_string(isset($_POST['sermon1date']) ? $_POST['sermon1date'] : 0);
$sermon2 = mysqli_real_escape_string(isset($_POST['sermon2']) ? $_POST['sermon2'] : 0);
$date2 = mysqli_real_escape_string(isset($_POST['sermon2date']) ? $_POST['sermon2date'] : 0);
$sermon3 = mysqli_real_escape_string(isset($_POST['sermon3']) ? $_POST['sermon3'] : 0);
$date3 = mysqli_real_escape_string(isset($_POST['sermon3date']) ? $_POST['sermon3date'] : 0);
$sermon4 = mysqli_real_escape_string(isset($_POST['sermon4']) ? $_POST['sermon4'] : 0);
$date4 = mysqli_real_escape_string(isset($_POST['sermon4date']) ? $_POST['sermon4date'] : 0);


$insert = "INSERT INTO sermons (id, sermon1, date1, sermon2, date2, sermon3, date3, sermon4, date4)
	   VALUES ('', '$sermon1', '$date1', '$sermon2', '$date2', 'sermon3', '$date3', '$sermon4', '$date4')";

if ($link->query($insert) == true) {
	echo "recorded successfully... Thank you!";
}
else {
	echo "error";
}

$link->close();


?>