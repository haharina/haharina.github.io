<?php
	require('db.php');
	include 'header.php';
	//Check if a user is logged in or not
	session_start();
		if (isset($_SESSION['username'])){
		$username = $_SESSION['username'];
		//Display a message for logged-in users only
        $in = "Welcome to Our Website <br> ".$username;
        $login = '<a class="btn btn-link text-danger fw-bold order-1 order-lg-0" href="dashboard.php">Dashboard</a>';
        $register = '<a class="btn hover-top btn-collab" href="logout.php"> Logout</a>';
		}

		else{
            $in = "Welcome to Our Website";
            $login ='<a class="btn btn-link text-danger fw-bold order-1 order-lg-0" href="login.php">Login</a>';
            $register = '  <a class="btn hover-top btn-collab" href="register.php">Register</a>';
		}
	?> 
<!DOCTYPE html>
<html lang="en-US" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>

    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicons/favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicons/favicon.ico">
    <link rel="manifest" href="assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">
    <link href="assets/css/theme.css" rel="stylesheet" />
  </head>
  <body>

    <main class="main" id="top">
      <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3 d-block" data-navbar-on-scroll="data-navbar-on-scroll">

        <div class="container"><a class="navbar-brand" href="index.php"> <img style="width:18em; height:6em" class="me-3 d-inline-block" src="assets/img/gallery/logo.png" alt="" /></a>
          <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
          <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto pt-2 pt-lg-0 font-base">
              <li class="nav-item px-2" data-anchor="data-anchor"><a class="nav-link fw-bold active" aria-current="page" href="dashboard.php">Home</a></li>
            </ul>
            
            <?php echo $login.$register ?>
           
          </div>
        </div>
      </nav>
      <section id="home">
        <div class="container">
          <div class="row align-items-center g-2">
            <br>
            <div class="col-md-5 col-lg-6 order-0 order-md-1 text-end"><img class="pt-7 pt-md-0 w-100" style="padding-top:3em !important"src="assets/img/gallery/hero-header.gif" alt="hero-header" /></div>
            <div class="col-md-7 col-lg-6 py-6 text-md-start text-center">
              <h6 class="fs-0 text-uppercase fw-bold text-600">MS-SOCSO </h6>
              <h1 class="fw-bold fs-4 fs-lg-6 fs-xxl-7 text-primary"> 
                <?php
                     echo $in;
                ?>
              </h1>
              <p class="mb-5 fs-1 fw-medium">View Attandence in one place.</p>
            </div>
          </div>
        </div>
      </section>
    </main>

    <script src="vendors/@popperjs/popper.min.js"></script>
    <script src="vendors/bootstrap/bootstrap.min.js"></script>
    <script src="vendors/is/is.min.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="vendors/fontawesome/all.min.js"></script>
    <script src="assets/js/theme.js"></script>

    <link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@200;300;400;500;600;700&amp;family=Montserrat:wght@200;300&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@200;300;400;500;600;700&amp;family=Montserrat:wght@200;300;400;500;600;700&amp;display=swap" rel="stylesheet">
  </body>

</html>