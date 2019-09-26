<!doctype html>
<html class="no-js" lang="">

	<head>
		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<title></title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<link rel="manifest" href="site.webmanifest">
		<link rel="apple-touch-icon" href="icon.png">
		<!-- Place favicon.ico in the root directory -->

		<link rel="stylesheet" href="css/normalize.css">
		<link rel="stylesheet" href="css/all.css">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans|Oswald|PT+Sans" rel="stylesheet">

		<?php
			$file = basename($_SERVER['PHP_SELF']);
			$page = str_replace(".php", "", $file);
			if($page == 'speakers' || $page == 'index'){
				echo '<link rel="stylesheet" href="css/colorbox.css">';
			} elseif($page == 'conference'){
				echo '<link rel="stylesheet" href="css/lightbox.css">';
			}
		?>

		<link rel="stylesheet" href="css/main.css">
		
		<script src="js/vendor/modernizr-3.6.0.min.js"></script>
	</head>

	<body class="<?php echo $page; ?>">
		<!--[if lte IE 9]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
		<![endif]-->

		<header class="site-header">
			<div class="hero">
				<div class="contentHeader">
					<nav class="socialMedia">
						<a href="#"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
						<a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a>
						<a href="#"><i class="fab fa-pinterest-p" aria-hidden="true"></i></a>
						<a href="#"><i class="fab fa-youtube" aria-hidden="true"></i></a>
						<a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a>
					</nav>
					
					<div class="eventInfo">
						<p class="date"><i class="fas fa-calendar-alt"></i> Dec 10-12</p>
						<p class="city"><i class="fas fa-map-marker-alt"></i> Guadalajara, Mex</p>
						
						<h1 class="siteName">GDLWebCamp</h1>
						<p class="slogan">The best <span>web design</span> conference</p>
					</div> <!--.eventInfo-->
					
				</div>
			</div> <!--.hero-->
		</header>
		
		<div class="bar">
			<div class="container clearfix">
				<div class="logo">
					<a href="index.php">
						<img src="img/logo.svg" alt="logo gdlWebCamp">
					</a>
				</div>
				
				<div class="mobileMenu">
					<span></span>
					<span></span>
					<span></span>
				</div>
				
				<nav class="mainNavigation clearfix">
					<a href="conference.php">Conference</a>
					<a href="calendar.php">Calendar</a>
					<a href="speakers.php">Guest speakers</a>
					<a href="register.php">Reservations</a>
				</nav>
			
			</div> <!--.container-->
		</div> <!--.bar-->