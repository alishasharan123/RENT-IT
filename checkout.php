<?php
session_start();
include("includes/db.php");
include("functions/functions.php");
?>


<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>RENT NOW</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Best Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script src="js/jquery.min.js"></script>
<!-- //js -->
<!-- cart -->
<script src="js/simpleCart.min.js"></script>
<!-- cart -->
<!-- for bootstrap working -->
<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
<!-- //for bootstrap working -->
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- timer -->
<link rel="stylesheet" href="css/jquery.countdown.css" />
<!-- //timer -->
<!-- animation-effect -->
<link href="css/animate.min.css" rel="stylesheet"> 
<script src="js/wow.min.js"></script>
<script>
 new WOW().init();
</script>
<!-- //animation-effect -->










</head>
	
<body>
<!-- header -->

<?php 
cart();
?>
	<div class="header">
		<div class="container">
			<div class="header-grid">
				<div class="header-grid-left animated wow slideInLeft" data-wow-delay=".5s">
					<ul>
						<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:rentit96@gmail.com">rentit96@gmail.com</a></li>
						<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>+8609653304</li>
<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>+8293815049</li>
						<li><i class="glyphicon glyphicon-log-in" aria-hidden="true"></i>

<?php
if(!isset($_SESSION['customer_email']))
{
echo "<a href='check.php' style='color:skyblue;'>LOGIN</a>";
}
else{
echo"<a href='logout.php' style='color:skyblue;'>LOGOUT</a>";
}
?>
</li>

						<li><i class="glyphicon glyphicon-book" aria-hidden="true"></i><a href="customer_register.php">SIGN UP</a></li>

<li><?php
if(isset($_SESSION['customer_email']))
{
echo "<i class='glyphicon glyphicon-book' aria-hidden='true'></i><a href='my_account.php'>MY ACCOUNT</a>";
}
else
{
echo "<i class='glyphicon glyphicon-book' aria-hidden='true'></i><a href='check.php'>MY ACCOUNT</a>";
}
?>
</li>

<li> <?php
if(isset($_SESSION['customer_email']))
{

global $db;
$user=$_SESSION['customer_email'];
$get_name="select * from customers where customer_email='$user'";
$run_name=mysqli_query($db,$get_name);
$row_name=mysqli_fetch_array($run_name);
$c_id=$row_name['customer_id'];
$c_name=$row_name['customer_name'];
echo "<b style='color: #cc0066;'>WELCOME:</b>".$c_name;


}
else
{
echo " <b style='color:skyblue;'>WELCOME GUEST:</b>";
}
?> </li>
					</ul>
				</div>
				<div class="header-grid-right animated wow slideInRight" data-wow-delay=".5s">
					<ul class="social-icons">
						<li><a href="#" class="facebook"></a></li>
						<li><a href="#" class="twitter"></a></li>
						<li><a href="#" class="g"></a></li>
						<li><a href="#" class="instagram"></a></li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="logo-nav">
				<div class="logo-nav-left animated wow zoomIn" data-wow-delay=".5s">
					<h1><a href="index.php">RENT IT<span>RENT ANYTHING</span></a></h1>
				</div>
				<div class="logo-nav-left1">
					<nav class="navbar navbar-default">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header nav_2">
						<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div> <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
						<ul class="nav navbar-nav">
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">household <b class="caret"></b></a>
								<ul class="dropdown-menu multi-column columns-2">
									<div class="row">
										<div class="col-sm-3">
											<ul class="multi-column-dropdown">
								

      <?php
$get_item="select * from household";
$run_item=mysql_query($get_item);
while($row_item=mysql_fetch_array($run_item))
{
$item_id=$row_item['item_id'];
$item_title=$row_item['item_title'];



        echo "<li><a href='product.php?item=$item_id'>$item_title</a></li>";
}
?>
</div>

  
										<div class="clearfix"></div>
									</div>
								</ul>
							</li>
							<li class="dropdown">
							<!-- Mega Menu -->
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">fashion <b class="caret"></b></a>
								<ul class="dropdown-menu multi-column columns-2">
									<div class="row">
										<div class="col-sm-2">
											<ul class="multi-column-dropdown">
								

      <?php
$get_item="select * from fashion";
$run_item=mysql_query($get_item);
while($row_item=mysql_fetch_array($run_item))
{
$item_id=$row_item['item_id'];
$item_title=$row_item['item_title'];



        echo "<li><a href='product.php?item=$item_id'>$item_title</a></li>";
}
?>
</div>

  
										<div class="clearfix"></div>
									</div>
								</ul>
							</li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">electronic <b class="caret"></b></a>
								<ul class="dropdown-menu multi-column columns-2">
									<div class="row">
										<div class="col-sm-3">
											<ul class="multi-column-dropdown">
								

      <?php
$get_item="select * from electronics";
$run_item=mysql_query($get_item);
while($row_item=mysql_fetch_array($run_item))
{
$item_id=$row_item['item_id'];
$item_title=$row_item['item_title'];



        echo "<li><a href='product.php?item=$item_id'>$item_title</a></li>";
}
?>
</div>
										<div class="clearfix"></div>
									</div>
								</ul>
							</li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">vehicles <b class="caret"></b></a>
								<ul class="dropdown-menu multi-column columns-2">
									<div class="row">
										<div class="col-sm-3">
											<ul class="multi-column-dropdown">
								

      <?php
$get_item="select * from vehicles";
$run_item=mysql_query($get_item);
while($row_item=mysql_fetch_array($run_item))
{
$item_id=$row_item['item_id'];
$item_title=$row_item['item_title'];



        echo "<li><a href='product.php?item=$item_id'>$item_title</a></li>";
}
?>
</div>

  
										<div class="clearfix"></div>
									</div>
								</ul>
							</li>
							<li class="dropdown">
							<li>    <?php
if(isset($_SESSION['customer_email']))
{
echo "<a href='adindex.php'>RENT YOUR ITEMS</a>";
}
else
{
echo "</i><a href='check.php'>RENT YOUR ITEMS</a>";
}
?></li>

						</ul>
					</div>
					</nav>
				</div>
				<div class="logo-nav-right">
					<div class="search-box">
						<div id="sb-search" class="sb-search">

							





								<form method="get" action="res.php">
								<input class="sb-search-input" name="user_query" placeholder="Enter your search term..." type="search" id="search">
								<input class="sb-search-submit" type="submit" name="search" value="">
								<span class="sb-icon-search"> </span>
							</form>
						</div>
					</div>
						<!-- search-scripts -->
						<script src="js/classie.js"></script>
						<script src="js/uisearch.js"></script>
							<script>
								new UISearch( document.getElementById( 'sb-search' ) );
							</script>
						<!-- //search-scripts -->
				</div>
				<div class="header-right">
					<div class="cart box_1">
						<a href="checkout.php">
							<h3> <div class="total">
								<span class="simpleCart_total"></span> (<span id="simpleCart_quantity" class="simpleCart_quantity"></span> items)</div>
								<img src="images/bag.png" alt="" />
							</h3>
						</a>
						<p><li><a href="checkout.php">total items: <?php total_items()  ?></a></li>
						<div class="clearfix"> </div>
					</div>	
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //header -->
<!-- breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li><a href="index.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
				<li class="active">Checkout Page</li>
			</ol>
		</div>
	</div>
<!-- //breadcrumbs -->
<!-- checkout -->
	<div class="checkout">
		<div class="container">
			<h3 class="animated wow slideInLeft" data-wow-delay=".5s"> Total items selected:<?php total_items()  ?></h3>
			<div class="checkout-right animated wow slideInUp" data-wow-delay=".5s">








<?php
 $ip=getIp();
?>
<div id="product_box">
<form action="" method="POST" enctype="multipart/form-data">
<table align="center" width="700" bgcolor="skyblue">

<?php
 $total=0;
$ip=getIp();
$sel_price="select * from cart where ip_add='$ip'";
$run_price=mysqli_query($db,$sel_price);
while($p_price=mysqli_fetch_array($run_price)){
$pro_id=$p_price['p_id'];
$pro_price="select * from products where product_id='$pro_id'";


$run_pro_price=mysqli_query($db,$pro_price);
while($pp_price=mysqli_fetch_array($run_pro_price))
{
$product_price=array($pp_price['product_price']);
$product_title=$pp_price['product_title'];
$product_image=$pp_price['product_img1'];
$single_price=$pp_price['product_price'];

$values=array_sum($product_price);

$total+=$values;

?>
				<table class="timetable_sub">
					<thead>
						<tr>
							
							<th>Product</th>
							<th>Quality</th>
							<th>Product Name</th>
							<th>Service Charges</th>
							<th>Price</th>
							<th>Remove</th>
						</tr>
					</thead>
					<tr class="rem1">
						
						<td class="invert-image"><a href="single.html"><img src="admin_area/product_images/<?php echo $product_image;?>" alt=" " class="img-responsive" /></a></td>
						<td class="invert">
							 <div class="quantity"> 
								<div class="quantity-select">                           
									<div class="entry value-minus">&nbsp;</div>
									<div class="entry value"><span>1</span></div>
									<div class="entry value-plus active">&nbsp;</div>
								</div>
							</div>
						</td>
						<td class="invert"><?php echo $product_title; ?></td>
						<td class="invert">$5.00</td>
						<td class="invert"><?php echo "Rs".$single_price; ?></td>
						<td class="invert">
						<input type="checkbox"name="remove[]" value="<?php echo $pro_id; ?>"/> 
						</td>

<td><?php  echo "<a href='ship.php?pro_id=$pro_id'>RENT NOW</a>"; ?></td>



					</tr>
<?php
global $db;
if(isset($_POST['update_cart']))
{
$qty=$_POST['qty'];
$update_qty="update cart set qty='$qty'";
$run_qty=mysqli_query($db,$update_qty);

$_SESSION['qty']=$qty;


$total=$total*$qty;
}

?>
<?php 
}
}
?>
					
					
								<!--quantity-->
									<script>
									$('.value-plus').on('click', function(){
										var divUpd = $(this).parent().find('.value'), newVal = parseInt(divUpd.text(), 10)+1;
										divUpd.text(newVal);
									});

									$('.value-minus').on('click', function(){
										var divUpd = $(this).parent().find('.value'), newVal = parseInt(divUpd.text(), 10)-1;
										if(newVal>=1) divUpd.text(newVal);
									});
									</script>
								<!--quantity-->
				</table>
			</div>
			<div class="checkout-left">	
				<div class="checkout-left-basket animated wow slideInLeft" data-wow-delay=".5s">
					<input type="submit" name="update_cart"value="update cart"/>

				</div>


<?php
global $db;
if(isset($_POST['forder']))
{
$user=$_SESSION['customer_email'];
$get_name="select * from shipping where customer_email='$user'";
$run_name=mysqli_query($db,$get_name);
$row_name=mysqli_fetch_array($run_name);
$p_id=$row_name['product_id'];
$get_p="select * from products where product_id='$p_id'";
$run_p=mysqli_query($db,$get_p);
$row_p=mysqli_fetch_array($run_p);
$p_tit=$row_p['product_title'];
$p_img=$row_p['product_img1'];

echo $p_tit;
echo "<br>";
echo "<img src='product_images/<?php echo $p_img;?>' width='60' height='60'/>";
}
?>





<?php 
global $db;
$ip=getIp();
if(isset($_POST['update_cart']))
{
foreach($_POST['remove']as $remove_id)
{
$delete_product="delete from cart where p_id='$remove_id' AND  ip_add='$ip'";
$run_delete=mysqli_query($db,$delete_product);
if($run_delete)
{
echo "<script>window.open('checkout.php','_self')</script>";
}
}
}


?>
  




				<div class="checkout-right-basket animated wow slideInRight" data-wow-delay=".5s">
					<a href="index.php"><span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>Continue Shopping</a>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //checkout -->
<div class="footer">
		<div class="container">
			<div class="footer-grids">
				<div class="col-md-3 footer-grid animated wow slideInLeft" data-wow-delay=".5s">
					<h3>About Us</h3>
					<p>Duis aute irure dolor in reprehenderit in voluptate velit esse.<span>Excepteur sint occaecat cupidatat 
						non proident, sunt in culpa qui officia deserunt mollit.</span></p>
				</div>
				<div class="col-md-3 footer-grid animated wow slideInLeft" data-wow-delay=".6s">
					<h3>Contact Info</h3>
					<ul>
						<li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>1234k Avenue, 4th block, <span>New York City.</span></li>
						<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:info@example.com">info@example.com</a></li>
						<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>+1234 567 567</li>
					</ul>
				</div>
				<div class="col-md-3 footer-grid animated wow slideInLeft" data-wow-delay=".7s">
					<h3>Flickr Posts</h3>
					<div class="footer-grid-left">
						<a href="single.html"><img src="images/13.jpg" alt=" " class="img-responsive" /></a>
					</div>
					<div class="footer-grid-left">
						<a href="single.html"><img src="images/14.jpg" alt=" " class="img-responsive" /></a>
					</div>
					<div class="footer-grid-left">
						<a href="single.html"><img src="images/15.jpg" alt=" " class="img-responsive" /></a>
					</div>
					<div class="footer-grid-left">
						<a href="single.html"><img src="images/16.jpg" alt=" " class="img-responsive" /></a>
					</div>
					<div class="footer-grid-left">
						<a href="single.html"><img src="images/13.jpg" alt=" " class="img-responsive" /></a>
					</div>
					<div class="footer-grid-left">
						<a href="single.html"><img src="images/14.jpg" alt=" " class="img-responsive" /></a>
					</div>
					<div class="footer-grid-left">
						<a href="single.html"><img src="images/15.jpg" alt=" " class="img-responsive" /></a>
					</div>
					<div class="footer-grid-left">
						<a href="single.html"><img src="images/16.jpg" alt=" " class="img-responsive" /></a>
					</div>
					<div class="footer-grid-left">
						<a href="single.html"><img src="images/13.jpg" alt=" " class="img-responsive" /></a>
					</div>
					<div class="footer-grid-left">
						<a href="single.html"><img src="images/14.jpg" alt=" " class="img-responsive" /></a>
					</div>
					<div class="footer-grid-left">
						<a href="single.html"><img src="images/15.jpg" alt=" " class="img-responsive" /></a>
					</div>
					<div class="footer-grid-left">
						<a href="single.html"><img src="images/16.jpg" alt=" " class="img-responsive" /></a>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-3 footer-grid animated wow slideInLeft" data-wow-delay=".8s">
					<h3>Blog Posts</h3>
					<div class="footer-grid-sub-grids">
						<div class="footer-grid-sub-grid-left">
							<a href="single.html"><img src="images/9.jpg" alt=" " class="img-responsive" /></a>
						</div>
						<div class="footer-grid-sub-grid-right">
							<h4><a href="single.html">culpa qui officia deserunt</a></h4>
							<p>Posted On 25/3/2016</p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="footer-grid-sub-grids">
						<div class="footer-grid-sub-grid-left">
							<a href="single.html"><img src="images/10.jpg" alt=" " class="img-responsive" /></a>
						</div>
						<div class="footer-grid-sub-grid-right">
							<h4><a href="single.html">Quis autem vel eum iure</a></h4>
							<p>Posted On 25/3/2016</p>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="footer-logo animated wow slideInUp" data-wow-delay=".5s">
				<h2><a href="index.html">Rent It <span>rent anything</span></a></h2>
			</div>
			<div class="copy-right animated wow slideInUp" data-wow-delay=".5s">
				
			</div>
		</div>
	</div>
<!-- //footer -->
</body>
</html>