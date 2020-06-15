<?php
include("includes/db.php");
include("admin_area/functions/functions.php");
?>

<?php

if (isset($_GET['pro_id'])) {
	$pro_id=$_GET['pro_id'];
	$get_product="select * from products where product_id='$pro_id' ";
	$run_product=mysqli_query($con,$get_product);
	$row_product=mysqli_fetch_array($run_product);
	$p_cat_id=$row_product['p_cart_id'];
	$p_title=$row_product['product_title'];
	$p_desc=$row_product['product_desc'];
	$p_price=$row_product['product_price'];
	$p_img1=$row_product['product_img1'];
	$p_img2=$row_product['product_img2'];
	$p_img3=$row_product['product_img3'];

	$get_p_cat="select * from product_categories where p_cat_id='p_cat_id'";
	$run_p_cat=mysqli_query($con,$get_p_cat);
	$row_p_cat=mysqli_fetch_array($run_p_cat);
	$p_cat_id=$row_p_cat['p_cat_id'];
	$p_cat_title=$row_p_cat['p_cat_title'];
	

}
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
					<span>4 item In cart</span>
					
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
				
				<li><?php echo $p_title?></li>
			</ul>
			
		</div><!---col-md-12---->
		<div class="col-md-3"><!----col md 3 start-->
			<?php
				include("includes/sidebar.php");
			?>
			
		</div><!----col md 3 end-->

		<div class="col-md-9">
			<div class="row" id="productmain">
				<div class="col-sm-6">
					<div id="mainimage">
						<div id="myCarousel" class="carousel slide" data-ride="carousel">
							<ol class="carousel-indicators">
                                     <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                     <li data-target="#myCarousel" data-slide-to="1"></li>
                                        <li data-target="#myCarousel" data-slide-to="2"></li>
                          </ol>

  <!-- Wrapper for slides -->
                                <div class="carousel-inner">
                                      <div class="item active">
                                           <img src="admin_area/product_images/<?php echo $p_img1 ?>" class="img-responsive">
                                                 </div>

                                                 <div class="item">
     									 <img src="admin_area/product_images/<?php echo $p_img2 ?>" class="img-responsive">
  												  </div>

   												 <div class="item">
      												<img src="admin_area/product_images/<?php echo $p_img3 ?>" class="img-responsive">
    													</div>
  																</div>

  <!-- Left and right controls -->
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
					
				</div><!---col-sm-6 silder end--->
				<div class="col-sm-6">
					<div class="box">
						<h1 class="text-center"><?php echo $p_title ?>"</h1>
						<?php 
						addCart();
						 ?>

						<form action="details.php?add_cart=<?php echo $pro_id ?>" method="post" class="form-horizontal">
							<div class="form-group"><!---from group start------>
								<label class="col-md-5 control-label">Product Quantity</label>
								<div class="col-md-7">
									<select  name="product_qty" class="form-control">
										<option>1</option>
										<option>2</option>
										<option>3</option>
										<option>4</option>
										<option>5</option>
									</select>
								</div>
							</div><!---from group start------>
							<div class="form-group">
								<label class="col-md-5 control-label">Product Size</label>
								<div class="col-md-7">
									<select  name="product_size" class="form-control">
										<option>Select a size</option>
										<option>Small</option>
										<option>Medium</option>
										<option>Large</option>
										<option>Extra Large</option>
									</select>
								</div>
							</div>
							<p class="price">INR <?php echo $p_price ?></p>
							<p class="text-center buttons">
								<button class="btn btn-primary" type="submit">
									<i class="fa fa-shopping-cart">Add to cart</i>
								</button>
							</p>
						</form><!--form end-->
					</div><!----box end-->
					<div class="col-xs-4">
						<a href="#" class="thumb">
							<img src="admin_area/product_images/<?php echo $p_img1 ?>" class="img-responsive">
						</a>
					</div>

					<div class="col-xs-4">
						<a href="#" class="thumb">
							<img src="admin_area/product_images/<?php echo $p_img2 ?>" class="img-responsive">
						</a>
					</div>

					<div class="col-xs-4">
						<a href="#" class="thumb">
							<img src="admin_area/product_images/<?php echo $p_img3 ?>" class="img-responsive">
						</a>
					</div>
				</div>
				
			</div>
			<div class="box" id="details">
				<h4>Product Details</h4>
				<p><?php echo $p_desc ?>
				</p>
				<h4>Size</h4>
				<ul>
					<li>Small</li>
					<li>Medium</li>
					<li>Large</li>
					<li>Extra Large</li>
				</ul>
			</div>
			<div id="row same-height-row"><!---row same-height-row start---->
				<div class="col-md-3 col-sm-6">
					<div class="box same-height headline">
						<h3 class="text-center">You also Like These Product</h3>
						
					</div>
					
				</div>
				<?php
				$get_product="select * from products order by 1 LIMIT 0,3";
				$run_product=mysqli_query($con,$get_product);
				while ($row=mysqli_fetch_array($run_product)) {
					$pro_id=$row['product_id'];
					$product_title=$row['product_title'];
					$product_price=$row['product_price'];
					$product_img1=$row['product_img1'];
					echo "<div class='center-responsive col-md-3 col-sm-6'>
			<div class='product same-height'>
			<a herf='details.php?pro_id=$pro_id'>
			<img src='admin_area/product_images/$product_img1' class='img-responsive'>
			</a>
			<div class='text'>
			<h3><a herf='details.php?pro_id=$pro_id'>$product_title
			</a>
			</h3>
				<p class='price'>INR $product_price</p>
				<p class='buttons'>
				<a href='details.php?pro_id=$pro_id' class='btn btn-default'>View Details</a>

                                		<a href='details.php?pro_id=$pro_id' class='btn btn-primary'><i class='fa fa-shopping-cart'></i>Add to cart</a>
				</p>
			</div>
			</div>

		</div>";



				}
				?>
				
			</div><!---row same-height-rowend---->
			
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
