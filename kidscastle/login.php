<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php include ('server.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Kids Castle a Society and People</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Kids Care Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="css/style.css" type="text/css" rel="stylesheet" media="all">    
<!-- //Custom Theme files -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- js -->
<script src="js/jquery-2.2.3.min.js"></script>  
<!-- //js -->
<!-- web-fonts -->  
<link href="//fonts.googleapis.com/css?family=Parisienne" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Yanone+Kaffeesatz:200,300,400,700" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- //web-fonts -->
<style>
	#logindiv {
		border:2px solid orange;
		top:5px;
		left:24%;
		padding:75px;
	}
	.error {
		width:92%;
		margin:0px auto;
		padding:10px;
		border:1px solid #a94442;
		color:#a94442;
		background: #f2dede;
		border-radius:5px;
		text-align:left;
	}
</style>
</head>
<body> 
	<!-- header -->
	<div class="navbar-header navbar-left">
		<h1><a href="index.html"><img src= "images/logo.png" height= "150px" width= "300px" /> <span><i>&nbsp&nbsp&nbsp&nbsp&nbspPassion </i> <i class="logo-w3l2">for</i> <i class="logo-w3l3"> Exellence!</i></span></a></h1>
	</div>
	<div class="headerw3l">
				
		<nav class="navbar navbar-default">
		
			<div class="container">
				
				<!-- navigation --> 
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button> 
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">					
					<ul class="nav navbar-nav navbar-left">
						<li class="active"><a href="index.html" class="link link--yaku"><span>H</span><span>O</span><span>M</span><span>E</span></a></li>
						<li class="active"><a href="login.php" class="link link--yaku"><span>L</span><span>O</span><span>G</span><span>I</span><span>N</span></a></li>
						<li class="active"><a href="table.html" class="dropdown-toggle link link--yaku" ><span>T</span><span>A</span><span>B</span><span>L</span><span>E</span></a></li>
						<li class="active"><a href="registration.php" class="link link--yaku"><span>R</span><span>E</span><span>G</span><span>I</span><span>S</span><span>T</span><span>R</span><span>A</span><span>T</span><span>I</span><span>O</span><span>N</span></a></li>
						<li class="active"><a href="design.html" class="link link--yaku"><span>D</span><span>E</span><span>S</span><span>I</span><span>G</span><span>N</span></a></li>
					</ul>		
				<div class="clearfix"> </div>
				</div><!-- //navigation --> 
			</div>	
		</nav>		
	</div>	
	<!-- //header -->
	<!-- contact -->
	<div class="contact w3-agileits">
		<div class="container">
			<h3 class="agileits-title1">Login</h3>  
			<div class="contact-w3lsrow">
				<div class="col-md-6 contact-right" id= "logindiv">
					<form action="login.php" method="post">
					<!-- display errors here -->
					<?php include('errors.php'); ?>
						<input type="text" name="username" placeholder="Name" >
						<input type="text" name="email" placeholder="Email" >
						<input type="submit" name= "loginbtn" value="Login">
					</form>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //contact -->  
	<!-- footer -->
	<div class="footer w3layouts">
		<div class="container">
			<div class="footer-agileinfo">
				<div class="col-md-3 col-sm-6 footer-grid agileits-w3layouts">
					<h3>Useful Info</h3>
					<ul>
						<li><a href="#"><i class="glyphicon glyphicon-chevron-right"></i>Hendrerit quam</a></li>
						<li><a href="#"><i class="glyphicon glyphicon-chevron-right"></i>Amet consectetur </a></li>
						<li><a href="#"><i class="glyphicon glyphicon-chevron-right"></i>Iquam hendrerit</a></li>
						<li><a href="#"><i class="glyphicon glyphicon-chevron-right"></i>Donec ut lectus </a></li>
					</ul>
				</div> 
				<div class="col-md-3 col-sm-6 footer-grid footer-tags agileits-w3layouts">
					<h3>Tag Cloud</h3>
					<ul>
						<li><a href="index.html">Home</a></li>
						<li><a href="about.html">About</a></li>
						<li><a href="codes.html">Codes</a></li>
						<li><a href="gallery.html">Gallery</a></li>
						<li><a href="contact.html">Contact Us</a></li>
					</ul>
				</div>
				<div class="col-md-4 col-sm-6 footer-grid footer-review agileits-w3layouts">
					<h3>Newsletter</h3>
					<p>Maecenas sodales tortor ac ligula ultrices dictum et quis urna neque eget.</p> 
					<form action="#" method="post">
						<input type="email" name="Email" placeholder="Your Email" required="">
						<input type="submit" value="Subscribe"> 
						<div class="clearfix"> </div>
					</form> 
				</div>
				<div class="col-md-2 col-sm-6 footer-grid w3social">
					<h3>Social Media</h3>
					<ul>
						<li><a href="#"><i class="fa fa-google-plus"></i>Google-plus</a></li>
						<li><a href="#"><i class="fa fa-facebook"></i>Facebook</a></li>
						<li><a href="#"><i class="fa fa-twitter"></i>Twitter</a></li>
						<li><a href="#"><i class="fa fa-dribbble"></i>Dribbble</a></li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div> 
		</div>
	</div>
	<div class="copy-right w3-agileits"> 
		<div class="container">
			<p>© 2020 Kids Castle . All rights reserved | Design by Tinotenda Mupasiri</a></p>
		</div>
	</div>  
	<!-- //footer -->
	<!-- start-smooth-scrolling -->
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>	
	<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
			
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
	</script>
	<!-- //end-smooth-scrolling -->	
	<!-- smooth-scrolling-of-move-up -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
			};
			*/
			
			$().UItoTop({ easingType: 'easeOutQuart' });
			
		});
	</script>
	<!-- //smooth-scrolling-of-move-up --> 	
	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/bootstrap.js"></script>
</body>
</html>