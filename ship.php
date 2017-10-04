<?php
include("includes/db.php");
include("functions/functions.php");

?>
<!DOCTYPE html>
<html lang="en">
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
<form method="POST" action="ship.php" enctype="multipart/form-data">
<table width="700" align="center" border="2" bgcolor="#336633">
<tr>
<td colspan="2"><h2>INSERT YOUR SHIPPING DETAILS :</h2></td>
</tr>

<tr>
<td>CUSTOMER COUNTRY: </td>
<td>
<select name="customer_country">
<option>select a category</option>
<option>INDIA</option>
<option>PAKISTAN</option>
<option>AFGHANISTAN</option>

<option>CHINA</option>


</select>

</td>
</tr>

<tr>
<td>CUSTOMER STATE:</td>
<td><input type="text"name="customer_state"/></td>
</tr>
<tr>
<td>CUSTOMER ADDRESS</td>
<td><textarea name="customer_address" rows="10"col="20"></textarea></td>
</tr>
<tr>
<td>CUSTOMER LANDMARK</td>
<td><input type="text"name="customer_landmark" size="50"/></td>
</tr>
<tr>
<td>CUSTOMER CONTACT</td>
<td><input type="text"name="customer_contact" size="50"/></td>
</tr>
</table>
<p align="center">
<button type="submit" name="insert_det" class="button"><span>INSERT DETAILS</span></button>


</form>

<a href="index.php">GO BACK</a>
<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="footer-grids">
				<div class="col-md-3 footer-grid animated wow slideInLeft" data-wow-delay=".5s">
					<h3>Motive</h3>
					<p>WELCOME TO THE COOLEST RENTING STORE. RENT FROM ANYWHERE ANYTIME ANYTHING.<br>Here you will get best rent prices for all your choices.:)</span></p>
				</div>
				<div class="col-md-3 footer-grid animated wow slideInLeft" data-wow-delay=".6s">
					<h3>About us</h3>
					<ul>
						<li><i class="glyphicon glyphicon-user" aria-hidden="true"></i>MD- Jayshish Ranjan</span></li>
						<li><i class="glyphicon glyphicon-user" aria-hidden="true"></i><a>CEO- Alisha Sharan</a></li>
						<li><i class="glyphicon glyphicon-star-empty" aria-hidden="true"></i>copyright@RENTIT</li>
					</ul>
				</div>
				
				
				<div class="col-md-3 footer-grid animated wow slideInLeft" data-wow-delay=".6s">
					<h3>Contact Info</h3>
					<ul>
						<li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>bihar sharif, nalnda, BIHAR, INDIA-803101</span></li>
						<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:rentit96@gmail.com">rentit96.com</a></li>
						<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>+91 8609653304<br>+91 8293815049</li>
					</ul>
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

<?php

global $db;
if(isset($_POST['insert_det']))
{

 $cust_country=$_POST['customer_country'];

$cust_state=$_POST['customer_state'];
$cust_address=$_POST['customer_address'];
$cust_landmark=$_POST['customer_landmark'];
$cust_contact=$_POST['customer_contact'];
$status='on';

if($cust_country=='' OR $cust_state=='' OR $cust_address=='' OR $cust_landmark==''  OR $cust_contact=='')
{
echo "<script type='text/javascript'>alert('please fill all the fields')</script>";
exit();
}
else
{
$insert_product="insert into shipping(cust_country,cust_state,cust_address,cust_landmark,cust_contact,cust_orderdate)values('$cust_country','$cust_state','$cust_address','$cust_landmark','$cust_contact','NOW()')";
$run_product=mysql_query($insert_product);
if($run_product)
{
echo "<script>alert('product inserted successfully')</script>";
}
}
}
?>



