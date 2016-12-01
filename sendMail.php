<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Contact</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/business-casual.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="jquery.validate.js"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

  <div class="brand">Providence Missionary Baptist Church</div>
  <div class="address-bar">2917 Tracy Ave | Kansas City, MO 64109 | 816.753.1545</div>

  <!-- Navigation -->
  <nav class="navbar navbar-default" role="navigation">
      <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
              </button>
              <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
              <a class="navbar-brand" href="index.html">Home</a>
          </div>
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav">
                  <li>
                      <a href="index.html">Home</a>
                  </li>
                  <li>
                      <a href="about.html">About</a>
                  </li>
				  <li>
					  <a href="donate.html">Donate</a>
				  </li>	  
                  <li>
                      <a href="blog.html">Service Times</a>
                  </li>
				  <li>
					  <a href="events.php">Upcoming</a>
				  </li>
                  <li>
                      <a href="contact.html">Contact</a>
                  </li>
              </ul>
          </div>
          <!-- /.navbar-collapse -->
      </div>
      <!-- /.container -->
  </nav>

    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-sm-4 col-md-8 col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Contact
                        <strong>Providence Missionary Baptist Church</strong>
                    </h2>
                    <hr>
                </div>
                <div class="col-sm-4 col-md-8 col-lg-12">
                    <!-- Embedded Google Map using an iframe - to select your location find it on Google maps and paste the link as the iframe src. If you want to use the Google Maps API instead then have at it! -->
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d64832.48507759102!2d-94.59952401707704!3d39.07031791778309!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x87c0f005d506d029%3A0x96a4d5677902a357!2s2917+Tracy+Ave%2C+Kansas+City%2C+MO+64109!5e0!3m2!1sen!2sus!4v1476559498522" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
                    <p>Phone:
                        <strong>816.753.1545</strong>
					</p>
					<p>Cell:	
						<strong>913.461.2662</strong>
                    </p>
                    <p>Email:
                        <strong><a href="mailto:name@example.com">doricemcghee75@gmail.com</a></strong>
                    </p>
                    <p>Address:
                        <strong>2917 Tracy Ave
                            <br>Kansas City, MO 64109</strong>
                    </p>
                <div class="clearfix"></div>
            </div>
        </div>

        <div class="row">
            <div class="box">
                <div class="col-sm-4 col-md-8 col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Contact
                        <strong>form</strong>
                    </h2>
                    <hr>
                    <form role="form" name="form1" action="sendMail.php" method="POST" id="database" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-sm-4 col-md-8 col-lg-12">
                                <label>Name</label>
                                <input type="text" class="form-control" name="name" required>
                            </div>
                            <div class="form-group col-sm-4 col-md-8 col-lg-12">
                                <label>Email Address</label>
                                <input type="email" class="form-control" name="email" required>
                            </div>
                            <div class="form-group col-sm-4 col-md-8 col-lg-12">
                                <label>Phone Number</label>
                                <input type="tel" class="form-control" name="phoneNumber" required>
                            </div>
                            <div class="clearfix"></div>
                            <div class="form-group col-sm-4 col-md-8 col-lg-12">
                                <label>Message</label>
                                <textarea class="form-control" rows="6" name="message" required></textarea>
                            </div>
                            <div class="form-group col-sm-4 col-md-8 col-lg-12">
                                <input type="hidden" name="save" value="contact">
                                <input type="submit" id="submit" name="submit" value="Submit" class="btn btn-default">
                            </div>
							<div id="posted"><br>
								<p id="message" style="font-size: 100%;">Submission Successful</p>
							</div>
                        </div>
                    </form>
                </div>
            </div>
		
		<div class="row">
            <div class="box">
                <div class="col-sm-4 col-md-8 col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Prayer
                        <strong>Request</strong>
                    </h2>
                    <hr>
                    <form role="form" name="form2" action="prayerRequestSend.php" method="POST" id="databas3" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-sm-4 col-md-8 col-lg-12">
                                <label>Name</label>
                                <input type="text" class="form-control" name="name" required>
                            </div>
                            <div class="form-group col-sm-4 col-md-8 col-lg-12">
                                <label>Email Address</label>
                                <input type="email" class="form-control" name="email" required>
                            </div>

                            <div class="clearfix"></div>
                            <div class="form-group col-sm-4 col-md-8 col-lg-12">
                                <label>Prayer Request</label>
                                <textarea class="form-control" rows="6" name="message" required></textarea>
                            </div>
                            <div class="form-group col-sm-4 col-md-8 col-lg-12">
                                <input type="hidden" name="save" value="contact">
                                <input type="submit" id="submi7" name="submi7" value="Submit" class="btn btn-default">
                            </div>
							<div id="post3d"><br>
								<p id="messag3" style="font-size: 100%;"></p>
							</div>
                        </div>
                    </form>
                </div>
            </div>	
        </div>
    <!-- /.container -->

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-md-8 col-lg-12 text-center">
                    <p>Copyright &copy; Providence Missionary Baptist Church 2016</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

<?php

if(isset($_POST['submit'])){
$name = mysqli_real_escape_string($_POST['name']);
$email = mysqli_real_escape_string($_POST['email']);
$phonenumber = mysqli_real_escape_string($_POST['phoneNumber']);
$message = mysqli_real_escape_string(nl2br($_POST['message']));

include 'connect.php';
require 'PHPMailer/PHPMailerAutoload.php';

$mail = new PHPMailer;

$mail->IsSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup server
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'website@gmail.com';                            // SMTP username
$mail->Password = '**********';                           // SMTP password
$mail->SMTPSecure = 'tls'; 
$mail->Port = 587;                           // Enable encryption, 'ssl' also accepted
$mail->IsHTML(true);                                  // Set email format to HTML

$mail->From = 'website@gmail.com';
$mail->FromName = 'Your Website';
$mail->AddAddress('emailaddress@gmail.com', '');  // Add a recipient    

$mail->Subject = 'New Contact Info';
$mail->Body    = '<b>Name:</b>' .$name. '<br><b>Email Address:</b> ' .$email. '<br> <b>Message:</b> ' .$message. '<br> <b>Phone Number:</b> ' .$phonenumber. '<br>';

if(!$mail->Send()) {
   echo 'Message could not be sent.';
   echo 'Mailer Error: ' . $mail->ErrorInfo;
   exit;
}
echo 'Message has been sent';
}
error_reporting(E_ALL);

if ($link->connect_errno) {
    die('Could not connect: ' . mysqli_error());
}
echo 'Connected successfully';


$insert = "INSERT INTO mail (id, email)
			VALUES ('', '$email')";

if ($link->query($insert) == true) {
	echo "recorded successfully... Thank you!";
}
else {
	echo "error";
}

$link->close();

?>	
	
</body>

</html>
<?php

