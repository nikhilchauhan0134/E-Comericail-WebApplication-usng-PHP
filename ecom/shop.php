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
						<li class="active"><!------- list start------------------>
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


<!---Main Work start---->
<div id="content">
	<div class="container"><!---container start---->
		<div class="col-md-12"><!---col-md-12---->
			<ul class="breadcrumb">
				<li><a href="home.php">Home</a></li>
				<li>Shop</li>
			</ul>
			
		</div><!---col-md-12---->
		<div class="col-md-3"><!----col md 3 start-->
			<?php
				include("includes/sidebar.php");
			?>
			
		</div><!----col md 3 end-->
		<div class="col-md-9"><!--col-md-9 start-->
			<?php
			if(!isset($_GET['p_cat'])){
				if(!isset($_GET['cat'])){
					echo "<div class='box'>
					<h1>Shop</h1>
					<p>lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
					</div>
					";
				}
			}

			?>


			
			<div class="row"><!---row start--->


				<?php
			if(!isset($_GET['p_cat'])){
				if(!isset($_GET['cat'])){
					
					$per_page=6;
					if(isset($_GET['page'])){
						$page=$_GET['page'];
					}else{
						$page=1;
					}
					$start_from=($page-1)*$per_page;
					$get_product="select * from products order by 1 DESC LIMIT $start_from,$per_page";
					$run_pro=mysqli_query($con,$get_product);
                                	while ($row=mysqli_fetch_array($run_pro)) {
                                		$pro_id=$row['product_id'];
                                		$pro_title=$row['product_title'];
                                		$pro_price=$row['product_price'];
                                		$pro_img1=$row['product_img1'];


                                		echo "<div class='col-md-4 col-sm-6 center-responsive'>
                                		<div class='product'>
                                		<a href='details.php?pro_id=$pro_id'>
                                		<img src='admin_area/product_images/$pro_img1' class='img-responsive'>
                                		<a/>
                                		<div class='text'>
                                		<h3><a href='details.php?pro_id=$pro_id></a></h3>

                                		<p class='price'>INR $pro_price</p>
                                		<p class='buttons'>
                                		<a href='details.php?pro_id=$pro_id' class='btn btn-default'>View Details</a>

                                		<a href='details.php?pro_id=$pro_id' class='btn btn-primary'><i class='fa fa-shopping-cart'></i>Add to cart</a>
                                		<p>
                                		</div>
                                		</div>
                                		</div>
                                		";
                                	}
				

			?>
			
			</div><!---row end--->


			<center>
				<ul class="pagination">
					<?php
					$query="select * from products";
					$result=mysqli_query($con,$query);
					$total_record=mysqli_num_rows($result);
					$total_pages=ceil($total_record / $per_page);
					echo "
					<li><a href='shop.php?pages=1'>".'First Page'."</a></li>
					";
					for($i=1;$i<=$total_pages;$i++){
						echo "
					<li><a href='shop.php?pages=".$i."'>".$i."</a></li>
					";
					}
					echo "
					<li><a href='shop.php?pages=$total_pages'>".'Last Pagess'."</a></li>
					";
			
				}
			}

			?>
				</ul>
			</center>
	
				<?php
				getPcatPro();
				getcatPro();
				?>
			
		</div><!--col-md-9 end-->
			
		
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
