 <?php

include 'connect.php';

$subject = $_POST["subject"];
$body = nl2br($_POST["body"]);

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT email FROM mail";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo $row["email"]. "<br>";
    }
} else {
    echo "0 results";
}

require 'PHPMailer/PHPMailerAutoload.php';

$mail = new PHPMailer;

$mail->IsSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup server
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'website@gmail.com';                            // SMTP username
$mail->Password = '**********';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable encryption, 'ssl' also accepted
$mail->IsHTML(true);                                  // Set email format to HTML

$mail->From = 'Providence Missionary Baptist Church';
$mail->FromName = 'PMBC';

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT email FROM mail";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        $mail->AddAddress($row["email"]);
    }
} else {
    echo "0 results";
} 
$mail->Subject = $subject;
$mail->Body    = $body;

if(!$mail->Send()) {
   echo 'Message could not be sent.';
   echo 'Mailer Error: ' . $mail->ErrorInfo;
   exit;
}
echo 'Message has been sent';

mysqli_close($conn);
?> 