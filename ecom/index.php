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
						<li class="active"><!------- list start------------------>
							<a href="index.php">Home</a><!-------it is uesd to create the link------------------>
						</li><!------- list end------------------>
						<li><!------- list start------------------>
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
						<li ><!------- list start------------------>
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

	<!----closing of navbar and opening of new silder--->
<div class="container" id="slider">
<div class="col-md-12">
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
							<ol class="carousel-indicators">
                                     <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                     <li data-target="#myCarousel" data-slide-to="1"></li>
                                        <li data-target="#myCarousel" data-slide-to="2"></li>
                          </ol>

  
                                <div class="carousel-inner"><!-- carousel-inne start -->
                                	<?php
                                	$get_slider="select * from slider LIMIT 0,1";
                                	$run_slider=mysqli_query($con,$get_slider);
                                	while ($row=mysqli_fetch_array($run_slider)) {
                                		$slider_name=$row['slider_name'];
                                		$slider_image=$row['slider_image'];
                                		echo "<div class='item active'>
                                		<img src='admin_area/slider_images/$slider_image'>
                                		</div>
                                		";
                                	}
                                	?>
                                	<?php
                                	$get_slider="select * from slider LIMIT 1,3";
                                	$run_slider=mysqli_query($con,$get_slider);
                                	while ($row=mysqli_fetch_array($run_slider)) {
                                		$slider_name=$row['slider_name'];
                                		$slider_image=$row['slider_image'];
                                		echo "<div class='item '>
                                		<img src='admin_area/slider_images/$slider_image'>
                                		</div>
                                		";
                                	}
                                	?>

                                	
                                     
  								</div><!-- carousel-inne end -->

  
  														<a class="left carousel-control" href="#myCarousel" data-slide="prev">
    									<span class="glyphicon glyphicon-chevron-left"></span>
    						<span class="sr-only">Previous</span>
  													</a>
  												<a class="right carousel-control" href="#myCarousel" data-slide="next">
    									<span class="glyphicon glyphicon-chevron-right"></span>
    						<span class="sr-only">Next</span>
  											</a>
											</div>
  <!-- Indicators -->
</div>
			
</div><!--slider bar end-->
	<!---end of the silder bar and start of new boxes --->
	<div  id="advantage"><!--advantage start--->
		<div class="container"><!--container start--->
			<div class="same-height-row"><!--same height-row start--->
				<div class="col-sm-4"><!--col-sm-4 start--->
					<div class="box same-height"><!--box same height start--->
						<div class="icon">
							<i class="fa fa-heart"></i>
							
						</div>
						<h3><a href="#">BEST PRICES</a></h3>
						<P>You can check on all other sites about yhe prices and than compare with us</P>
						
					</div><!--box same height start--->
					
				</div><!--col-sm-4 end--->


<div class="col-sm-4"><!--col-sm-4 start--->
					<div class="box same-height"><!--box same height start--->
						<div class="icon">
							<i class="fa fa-heart"></i>
							
						</div>
						<h3><a href="#">100% SATISFACTION GUARANTEED FROM US</a></h3>
						<P>Free returns on everything for 3 months</P>
						
					</div><!--box same height start--->
					
				</div><!--col-sm-4 end--->



				<div class="col-sm-4"><!--col-sm-4 start--->
					<div class="box same-height"><!--box same height start--->
						<div class="icon">
							<i class="fa fa-heart"></i>
							
						</div>
						<h3><a href="#">WE LOVE OUR CUSTOMERS</a></h3>
						<P>We are known to provide possible service</P>
						
					</div><!--box same height start--->
					
				</div><!--col-sm-4 end--->

				
			</div><!--same height-row end--->
			
		</div><!--container end--->
		
	</div><!--advantage end--->
	<!---end of new boxes and start of new hot box--->
	<div id="hot">
		<div class="box">
			<div class="container">
				<div class="col-md-12">
					<h2>Latest this week</h2>
				</div>
				
			</div>
			
		</div>
		
	</div>
<!---endof new hot box and create new continer--->
<div id="content" class="container">
	<div class="row">
		<?php
		getPro();
		?>
		
	</div>
	
</div>

<!------Footer start------>
<?php
include("includes/footer.php");

?>
<!------Footer end------>


<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
