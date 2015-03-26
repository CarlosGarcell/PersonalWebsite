<!DOCTYPE html>

<html lang="en">

	<head>

		<title>Carlos Garcell</title>

		<meta charset="utf-8">

		<meta name="keywords" content="Carlos, Garcell, Website, Laravel, Developer">

		<meta name="description" content="Freelance web developer.">

		<meta name="viewport" content="width=device-width, initial-scale=1">

		<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">

		<meta name="description" content="Freelance web developer.">

		<meta name="http-equiv" content="30">

		<meta name="author" content="Carlos Garcell">

		<!-- Roboto font import -->
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Roboto">

		<!-- Open Sans font import -->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400|Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>

		<!-- Animate.css import -->
		<link rel="stylesheet" type="text/css" href="css/animate.css">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">

		<!-- Homepage CSS -->
		<link rel="stylesheet" type="text/css" href="css/master.css">

		<!-- Latest 1.x jQuery version -->
		<script src="js/jquery-1.11.2.min.js"></script>

		<!-- Latest compiled and minified JavaScript -->
		<script src="js/bootstrap.min.js"></script>

	</head>

	<body>

		<!-- Implementation of master -->
		<script type="text/javascript" src="js/master.js"></script>

		<div id="wrap">
			@yield('content')
		</div>

		<nav class="navbar navbar-default navbar-fixed-bottom" role="navigation">
		  <div class="container-fluid">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand" href="#">CarlosGarcell</a>
		    </div>

		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      <ul class="nav navbar-nav">
		        <li><a href="/">Home</a></li>
		        <li><a href="about">About</a></li>
		        <li><a href="portfolio">Portfolio</a></li>
		        <li><a href="contact">Contact</a></li>
		      </ul>		        		  
		    </div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>

		<!-- Backstretch import -->
		<script type="text/javascript" src="js/jquery.backstretch.min.js"></script>

		<!-- Implementation of master -->
		<script type="text/javascript" src="js/master.js"></script>

		<!-- Easy Scroll import -->
		<!-- <script type="text/javascript" src="js/easy_scroll.js"></script> -->
	</body>
</html>