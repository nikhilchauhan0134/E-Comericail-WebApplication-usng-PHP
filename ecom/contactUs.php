<?php
include("includes/db.php");
include("admin_area/functions/functions.php");
?>





<!DOCTYPE html>
<html>
<head>
	<title>Departmental Store</title>
	<!-- Latest compiled and minified CSS -->

<link rel="stylesheet" href="styles/style.css">
<!-- jQuery library -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">




<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="">
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>


</head>
<body>
	<div id ="top"><!-------Top bar start------------------>
		<div class="container"><!-------Container start------------------>
			<div class="col-md-6 offer"><!-------col-md-6 offer start------------------>
				<a href="#" class="btn btn-success btn-sm">
					Welcome Guest
				</a>
				<a href="#">
					Shopping cart Total Price:INR <?php totalprice(); ?>,Total Items <?php item(); ?>
				</a>
				
			</div><!-------col-md-6 offer end------------------>
			<div class="col-md-6">
				<ul class="menu"><!-------unorder list start------------------>
					<li><!------- list start------------------>
						<a href="customer_registration.php"><!-------it is uesd to create the link------------------>
						Register	
						</a>
					</li><!-------list start------------------>
					<li><!------- list start------------------>
						<a href="checkout.php"><!-------it is uesd to create the link------------------>
						My Account	
						</a>
					</li><!-------list start------------------>
					
					<li><!------- list start------------------>
						<a href="cart.php"><!-------it is uesd to create the link------------------>
						Goto cart	
						</a>
					</li><!-------list start------------------>
					
					<li><!------- list start------------------>
						<a href="login.php"><!-------it is uesd to create the link------------------>
						Login
						</a>
					</li><!-------list start------------------>
					
					
				</ul><!-------unorder list end------------------>
				
			</div>
			
		</div><!-------container end------------------>
		
	</div><!-------Top bar end------------------>
	<!------Ending of top bar and Starting of NavBar -------->
	<div class="navbar navbar-default" id ="navbar"><!---navbar start-->
		<div class="container"><!-------Container start------------------>
			<div class="navbar-header"><!-------navbar header start------------------>
				<a class="navbar-brand home" href="index.php"><!-------it is uesd to create the link--------------->
					<img src="images/N.jpg" alt="Departmental store" class="hidden-xs">
					<img src="images/N.jpg" alt="Departmental" class="visible-xs">
				</a><!-------it is uesd to create the link end--------------->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
					<span class="sr-only">Toggle Navigation</span>
					<i class="fa fa-align-justify"></i>
				</button>
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#search">
					<span class="sr-only">Toggle Navigation</span>
					<i class="fa fa-search"></i>
				</button>
				
			</div><!-------navbar header endt------------------>
			<div class="navbar-collapse collapse" id="navigation"><!--navbar-cllapse collapse start--->
				<div class="padding-nav"><!--padding nav-start-->
					<ul class="nav navbar-nav navbar-left"><!-------unorder list start------------------>
						<li ><!------- list start------------------>
							<a href="index.php">Home</a><!-------it is uesd to create the link------------------>
						</li ><!------- list end------------------>
						<li ><!------- list start------------------>
							<a href="shop.php">Shop</a><!-------it is uesd to create the link------------------>
						</li><!------- list end------------------>
						<li ><!------- list start------------------>
							<a href="cart.php">Shopping cart</a><!-------it is uesd to create the link------------------>
						</li><!------- list end------------------>


						<li ><!------- list start------------------>
							<a href="MyAccount.php">My Account</a><!-------it is uesd to create the link------------------>
						</li><!------- list end------------------>
						<li ><!------- list start------------------>
							<a href="about.php">About Us</a><!-------it is uesd to create the link------------------>
						</li><!------- list end------------------>
						
						<li class="active"><!------- list start------------------>
							<a href="contactUs.php">Contact Us</a><!-------it is uesd to create the link------------------>
						</li><!------- list end------------------>
						
					</ul><!-------unorder list end------------------>
					
				</div><!--padding nav_end-->
				<a href="cart.php" class="btn btn-primary navbar-btn right">
					<i class="fa fa-shopping-cart"></i>
					<span><?php item(); ?> item In cart</span>
					
				</a>
				<div class="navbar-collapse collapse right"><!---navbar-collapse collapse-right start-->
				
				<button class="btn navbar-btn btn-primary" type="button" data-toggle="collapse" data-target="#search">
					<span class="sr-only">Toggle search</span>
					<i class="fa fa-search"></i>
					
				</button>	
				</div><!---navbar-collapse collapse-right end-->
				

				<div class="collapse clearfix" id="search">
					<form class="navbar-form" method="get" action="result.php">
						<div class="input-group">
							<input type="text" name="user_query" placeholder="Search" class="form-control" required="">
							<span class="input-group-btn">
							<button type="submit" value="Search" name="search" class="btn btn-primary">
								<i class="fa fa-search"></i>
								
							</button>
							</span>
						</div>
						
					</form>
					
				</div>
					
				</div><!--navbar-cllapse collapse start--->
			
		</div><!-------Container end------------------>
		
	</div><!---navbar end-->


<!---Main Work start---->
<div id="content">
	<div class="container"><!---container start---->
		<div class="col-md-12"><!---col-md-12---->
			<ul class="breadcrumb">
				<li><a href="home.php">Home</a></li>
				<li>Contact Us</li>
			</ul>
			
		</div><!---col-md-12---->
		<div class="col-md-3"><!----col md 3 start-->
			
			
		</div><!----col md 3 end-->



		<div class="col-md-9">
			<div class="box">
				<div class="box-header"><!--box-header start---->
					<center>
						<h2>Contact Us</h2>
						<p class="text-muted"> If you have any question,please feel free to contact us,our customer service center is working for you 24/7</p>
					</center>
				</div><!--box-header end---->
				<form action="contactUs.php" method="post">
					<div class="form-group">
						<label>Name</label>
						<input type="text" name="name" required="" class="form-control">
					</div>
					<div class="form-group">
						<label>Email</label>
						<input type="text" name="email" required="" class="form-control" required="">
					</div>

					<div class="form-group">
						<label>Subject</label>
						<input type="text" name="submit" required="" class="form-control" required="">
					</div>
					<div class="form-group">
						<label>Message</label>
						<textarea class="form-control" name="message"></textarea>
					</div>
					<div class="text-center">
						<button type="submit" name="submit" class="btn btn-primary">
							<i class="fa fa-user-md"></i> Send Message
						</button>
					</div>
				</form>
			</div>
			
		</div>

		</div><!---container end---->
	
</div>
<!---Main work end---->

	<!------Footer start------>
<?php
include("includes/footer.php");

?>
<!------Footer end------>


<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>


<php

if


>?
