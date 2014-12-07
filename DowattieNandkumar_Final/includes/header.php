<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo $page_title; ?></title>
	<link rel="stylesheet" href="styles/new-main.css">
	<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
	<link rel="shortcut icon" type="image/png" href="images/favicon.png"/>
	<script src="https://maps.googleapis.com/maps/api/js"></script>
</head>
<body>
	<nav >
		<div class="container">
			<h1><span>UI</span>Brush</h1>
			<div id="screen-nav">
				<ul class="clearfix">
					<a href="index.php"><li <?php if( $page == "home"){ echo 'class="active"';}?>>Home</li></a>
					<a href="#"><li class="triangle">About Us</li></a>
					<a href="services.php"><li <?php if( $page == "services"){ echo 'class="active"';}?>>Services</li></a>
					<a href="#"><li class="triangle">Portfolio</li></a>
					<a href="contact_us.php"><li <?php if( $page == "contact_us"){ echo 'class="active"';}?>>Contact Us</li></a>
				</ul>
			</div>
		<div id="mobile-nav">
			<i class="fa fa-bars fa-3x"></i>
			<ul class="clearfix">
				<a href="index.php"><li <?php if( $page == "index"){ echo 'class="active"';}?>>Home</li></a>
				<a href="#"><li class="triangle">About Us</li></a>
				<a href="services.php"><li <?php if( $page == "services"){ echo 'class="active"';}?>>Services</li></a>
				<a href="#"><li class="triangle">Portfolio</li></a>
				<a href="contact_us.php"><li <?php if( $page == "contact_us"){ echo 'class="active"';}?>>Contact Us</li></a>
			</ul>
		</div>
		</div>
	</nav>

