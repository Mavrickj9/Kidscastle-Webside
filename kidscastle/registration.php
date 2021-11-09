
<!DOCTYPE html>
<html lang="en">
<head>
<title>Kids Castle - Registration </title>
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
	#nextofkin {
		padding:10px;
		left:500px;
		text-align:center;
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

<div class="grid_3 grid_4">
				<h3 class="agileits-title1">Registration</h3>  
				<div class="tab-content">
					<div class="tab-pane active" id="horizontal-form">
						<form class="form-horizontal">
							<div class="form-group">
								<label for="lastname" class="col-sm-2 control-label">Last Name</label>
								<div class="col-sm-8">
									<input type="text" class="form-control1" id="lastname" placeholder="Input last name">
								</div>								
							</div>
							<div class="form-group">
								<label for="othernames" class="col-sm-2 control-label">Other Names</label>
								<div class="col-sm-8">
									<input type="text" class="form-control1" id="othernames" placeholder="Input other names starting with first name">
								</div>
							</div>
							<div class="form-group">
								<label for="age" class="col-sm-2 control-label">Age</label>
								<div class="col-sm-8">
									<input type="number" id="age" min= "2" max= "5">
								</div>
							</div>
							<div class="form-group">
								<label for="dateofbirth" class="col-sm-2 control-label">Date of Birth</label>
								<div class="col-sm-8">
									<input type="date" id="dateofbirth" >
								</div>
							</div>
							<div class="form-group">
								<label for="radio" class="col-sm-2 control-label">Gender</label>
								<div class="col-sm-8">
									<div class="radio-inline"><label><input type="radio" name= "male" id= "male"> Male</label></div>
									<div class="radio-inline"><label><input type="radio" name= "male" id= "female"> Female</label></div>
								</div>
							</div>
							<div class="form-group">
								<label for="height" class="col-sm-2 control-label">Height(m)</label>
								<div class="col-sm-8">
									<input type="number" id="height" min= "0" max= "3">
								</div>								
							</div>
							<div class="form-group">
								<label for="weight" class="col-sm-2 control-label">Weight(kg)</label>
								<div class="col-sm-8">
									<input type="number" id="weight" min= "0" max= "3">
								</div>
							</div>
							<div id= "nextofkin">
							<h2>Next of kin</h2>
							</div>
							<div class="form-group">
								<label for="noklastname" class="col-sm-2 control-label">Last Name</label>
								<div class="col-sm-8">
									<input type="text" class="form-control1" id="noklastname" placeholder="Input last name">
								</div>								
							</div>
							<div class="form-group">
								<label for="nokothernames" class="col-sm-2 control-label">Other Names</label>
								<div class="col-sm-8">
									<input type="text" class="form-control1" id="nokothernames" placeholder="Input other names starting with first name">
								</div>
							</div>
							<div class="form-group">
								<label for="nokrelation" class="col-sm-2 control-label">Relation to child</label>
								<div class="col-sm-8">
									<input type="text" class="form-control1" id="nokrelation" placeholder="father or mother or guardian" >
								</div>
							</div>
							<br><br><br>
							<div class="form-group">
								<label for="address" class="col-sm-2 control-label">Address</label>
								<div class="col-sm-8"><textarea name="txtarea1" id="address" cols="50" rows="4" class="form-control1"></textarea></div>
							</div>
							<div class="form-group">
								<label for="homecity" class="col-sm-2 control-label">City Of Origin</label>
								<div class="col-sm-8">
									<input type="text" class="form-control1" id="homecity" placeholder="Input home city here">
								</div>								
							</div>
							<div class="form-group">
								<label for="nationality" class="col-sm-2 control-label">Nationality</label>
								<div class="col-sm-8">
									<input type="text" class="form-control1" id="nationality" placeholder="Input last name">
								</div>								
							</div>
							<div class="form-group">
								<label for="selector1" class="col-sm-2 control-label"></label>
								<div class="col-sm-8"><select name="selector1" id="selector1" class="form-control1">
									<option>Lorem ipsum dolor sit amet.</option>
									<option>Dolore, ab unde modi est!</option>
									<option>Illum, fuga minus sit eaque.</option>
									<option>Consequatur ducimus maiores voluptatum minima.</option>
								</select></div>
							</div>
							<div class="form-group">
								<label for="checkbox" class="col-sm-2 control-label">Hobbies</label>
								<div class="col-sm-8">
									<div class="checkbox-inline1"><label><input type="checkbox" name= "Hobbies"> Cycling</label></div>
									<div class="checkbox-inline1"><label><input type="checkbox" name= "Hobbies"> PLaying Sport</label></div>
									<div class="checkbox-inline1"><label><input type="checkbox" name= "Hobbies"> Drawing</label></div>
									<div class="checkbox-inline1"><label><input type="checkbox" name= "Hobbies"> Solving Puzzles</label></div>
								</div>
							</div> 							
						</form>
					</div>
				</div>
			</div>  
		</div> 
	</div>  
	
		<!-- footer -->
	<div class="footer w3layouts">
		<div class="container">
			<div class="footer-agileinfo">
				<div class="col-md-3 col-sm-6 footer-grid">
					<h3>Useful Info</h3>
					<ul>
						<li><a href="#"><i class="glyphicon glyphicon-chevron-right"></i>Hendrerit quam</a></li>
						<li><a href="#"><i class="glyphicon glyphicon-chevron-right"></i>Amet consectetur </a></li>
						<li><a href="#"><i class="glyphicon glyphicon-chevron-right"></i>Iquam hendrerit</a></li>
						<li><a href="#"><i class="glyphicon glyphicon-chevron-right"></i>Donec ut lectus </a></li>
					</ul>
				</div> 
				<div class="col-md-3 col-sm-6 footer-grid footer-tags">
					<h3>Tag Cloud</h3>
					<ul>
						<li><a href="index.html">Home</a></li>
						<li><a href="login.php">Login</a></li>
						<li><a href="codes.html">Codes</a></li>
						<li><a href="registration.php">Registration</a></li>
						<li><a href="contact.html">Contact Us</a></li>
					</ul>
				</div>
				<div class="col-md-4 col-sm-6 footer-grid footer-review">
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
	<div class="copy-right"> 
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