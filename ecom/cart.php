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
						<li class="active"><!------- list start------------------>
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
				<li>Shopping Cart</li>
			</ul>
			
		</div><!---col-md-12---->


<div class="col-md-9" id="cart">
	<div class="box">
		<form action="cart.php" method="post" enctype="multipart-form-data">
			<h1>Shopping cart</h1>
			<?php
			global $db;
			$ip_add=getUserIP();
			$select_cart="select * from cart where ip_add='$ip_add'";
			$run_cart=mysqli_query($db,$select_cart);
			$count=mysqli_num_rows($run_cart);
			?>
			<p class="text-muted">Currently you have <?php echo $count ?> items in your cart</p>
			<div class="table-responsive">
				<table class="table">
					<thead>
					<tr>
						<th colspan="2">Product</th>
						<th>Quantity</th>
						<th>Unit Price</th>
						<th>Size</th>
						<th colspan="1">Delete</th>
						<th colspan="1">Sub Total</th>
					</tr>
					</thead>
					<tbody>

						<?php
						$total=0;
						while ($row=mysqli_fetch_array($run_cart)) {
							$pro_id=$row['p_id'];
							$pro_size=$row['size'];
							$pro_qty=$row['qty'];
							$get_product="select * from products where product_id='$pro_id'";
							$run_pro=mysqli_query($db,$get_product);
							while ($row=mysqli_fetch_array($run_pro)) {
								$pro_title=$row['product_title'];
								$pro_price=$row['product_price'];
								$pro_img1=$row['product_img1'];


								$sub_total=$row['product_price'] *$pro_qty;
								$total +=$sub_total;
							
						
						?>
						<tr>
							<td><img src="admin_area/product_images/<?php echo $pro_img1  ?>"></td>
							<td><?php echo $pro_title  ?></td>
							<td><?php echo $pro_qty  ?></td>
							<td>INR <?php echo $pro_price ?></td>
							<td><?php echo $pro_size  ?></td>
							<td><input type="checkbox" name="remove[]" value="<?php echo $pro_id  ?>"></td>
							<td>INR <?php echo $sub_total ?></td>
						</tr>

						
					</tbody>
					

					<?php } } ?>
					</tfoot>
				</table>

				<div class="box-footer">
					<div class="pull-left">
						<h4>Total price</h4>
					</div>
					<div class="pull-right">
						<h4>INR <?php echo $total ?></h4>
					</div>
				</div>


				<div class="box-footer">
					<div class="pull-left">
						<a href="index.php" class="btn btn-default">
							<i class="fa fa-chevron-left"></i>Continue Shopping
						</a>
					</div>
					<div class="pull-right">
						<button class="btn btn-default" type="submit" name="update" value="Update Cart">
							<i class="fa fa-refresh">Update Cart</i>
						</button>
						<a href="checkout.php" class="btn btn-primary">
							Proceed to CheckOut<i class=" fa fa-chevron-right"></i>
						</a>
					</div>
				</div>
			</div>
		</form>
		
	</div>

	<?php
	function updatecart(){
		global $con;
		if (isset($_POST['update'])) {
			foreach ($_POST['remove'] as $remove_id) {
				$delete_product="delete from cart where p_id='$remove_id'";
				$run_del=mysqli_query($con,$delete_product);
				if ($run_del) {
					echo "<script>window.open('cart.php','_self')</script>";
				}
			}
		}
	}
	 echo @$up_cart=updatecart();

	 ?>

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

			<div class="col-md-3"><!---col-md-3 start--->
				<div class="box" id="order-summary">
					<div class="box-header">
						<h3>Order Summary</h3>
					</div>
					<p class="text-muted">
						Shipping and additional costs are calculated based on the values you have entered
					</p>
					<div class="table-responsive">
						<table class="table">
							<tbody>
								<tr>
									<td>Order Subtotal</td>
									<th>INR <?php echo $sub_total ?></th>
								</tr>
								<tr>
									<td>Shipping and handling</td>
									<td>INR 0</td>

								</tr>
								<tr>
									<td>Tax</td>
									<td>INR 0</td>
								</tr>
								<tr class="total">
									<td>Total</td>
									<th>INR <?php echo $total ?></th>
								</tr>
							</tbody>
						
					</table>
					</div>
				</div>
				
			</div><!---col-md-3 end--->
		
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