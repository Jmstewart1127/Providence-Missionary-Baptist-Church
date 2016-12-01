<!DOCTYPE html>
<html lang="en">

<head>
	
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Coming Soon</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/business-casual.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">
	
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
  <?php require 'eventsfetch.php';
		require 'guestfetch.php';
		require 'sermonFetch.php';	?>
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
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Upcoming
                        <strong>Sermons at PMBC</strong>
                    </h2>
                    <hr>
                </div>
                <div class="col-md-4">
                    <img class="img-responsive img-border-left" src="img/773.jpg" alt="">
                </div>

                <div class="col-md-6">
					<h3><?php echo $sermon1 . " " . $date1; ?></h3>
					<h3><?php echo $sermon2 . " " . $date2; ?></h3>
					<h3><?php echo $sermon3 . " " . $date3; ?></h3>
					<h3><?php echo $sermon4 . " " . $date4; ?></h3>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>	

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Upcoming
                        <strong>Events at PMBC</strong>
                    </h2>
                    <hr>
                </div>
                <div class="col-md-4">
                    <img class="img-responsive img-border-left" src="img/783.jpg" alt="">
                </div>

                <div class="col-md-6">
					<h1><?php echo $name; ?></h1>
					<h2><?php echo $location; ?></h2>
					<h3><?php echo $timeDate; ?></h3>
					<p><?php echo $description; ?></p>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>

        <div class="row">
            <div class="box">
				<div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Upcoming
                        <strong>Guest Speakers at PMBC</strong>
                    </h2>
                    <hr>
                </div>
                <div class="col-md-4">
                    <img class="img-responsive img-border-left" src="img/795.jpg" alt="">
                </div>
				<div class="col-md-6">
					<h1><?php echo $guestname; ?></h1>
					<h2><?php echo $datetime; ?></h2>
					<h3><?php echo $guestlocation; ?></h3>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>

    </div>
    <!-- /.container -->

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>Copyright &copy; Providence Missionary Baptist Church 2016</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
