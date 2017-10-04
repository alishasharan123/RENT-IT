<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
session_start();
include("includes/db.php");
include("functions/functions.php");
?>



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
<script type='text/javascript'></script>
<script>
 new WOW().init();
</script>
<!-- //animation-effect -->


<style>

.button {
  padding: 7px 20px;
  font-size: 24px;
  text-align: center;
  cursor: pointer;
  outline: none;
  color: #ffcccc;
  background-color: #cc0066;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #ff99cc;
}

.button:hover {background-color: #660033;}

.button:active {
  background-color: #800040;
  box-shadow: 0 5px #ff99cc;
  transform: translateY(4px);
}


</style>
</head>
	
<body>
<!-- header -->
	<div class="header">
		<div class="container">
			<div class="header-grid">
				<div class="header-grid-left animated wow slideInLeft" data-wow-delay=".5s">
					<ul>
						<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:info@example.com">rentit@gmail.com</a></li>
						<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>+8609653304</li>
<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>+8293815049</li>
						<li><i class="glyphicon glyphicon-log-in" aria-hidden="true"></i><a href="login.html">Login</a></li>
						<li><i class="glyphicon glyphicon-book" aria-hidden="true"></i><a href="register.html">SIGN UP</a></li>

<li><i class="glyphicon glyphicon-book" aria-hidden="true"></i><a href="register.html">MY ACCOUNT</a></li>
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
					<h1><a href="index.html">RENT IT<span>RENT ANYTHING</span></a></h1>
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
					</div> 
					<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
						<ul class="nav navbar-nav">
							<li class="active"><a href="index.html" class="act">household</a></li>	
							<!-- Mega Menu -->
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">fashion <b class="caret"></b></a>
								<ul class="dropdown-menu multi-column columns-3">
									<div class="row">
										<div class="col-sm-4">
											<ul class="multi-column-dropdown">
												<h6>Men's Wear</h6>
												<li><a href="products.html">Clothing</a></li>
												<li><a href="products.html">Wallets</a></li>
												<li><a href="products.html">Shoes</a></li>
												<li><a href="products.html">Watches</a></li>
												<li><a href="products.html">Accessories</a></li>
											</ul>
										</div>
										<div class="col-sm-4">
											<ul class="multi-column-dropdown">
												<h6>Women's Wear</h6>
												<li><a href="products.html">Clothing</a></li>
												<li><a href="products.html">Wallets,Bags</a></li>
												<li><a href="products.html">Footwear</a></li>
												<li><a href="products.html">Watches</a></li>
												<li><a href="products.html">Accessories</a></li>
												<li><a href="products.html">Jewellery</a></li>
												<li><a href="products.html">Beauty & Grooming</a></li>
											</ul>
										</div>
										<div class="col-sm-4">
											<ul class="multi-column-dropdown">
												<h6>Kid's Wear</h6>
												<li><a href="products.html">Kids Home Fashion</a></li>
												<li><a href="products.html">Boy's Clothing</a></li>
												<li><a href="products.html">Girl's Clothing</a></li>
												<li><a href="products.html">Shoes</a></li>
												<li><a href="products.html">Brand Stores</a></li>
											</ul>
										</div>
										<div class="clearfix"></div>
									</div>
								</ul>
							</li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">electronic <b class="caret"></b></a>
								<ul class="dropdown-menu multi-column columns-3">
									<div class="row">
										<div class="col-sm-4">
											<ul class="multi-column-dropdown">
												<h6>Home Collection</h6>
												<li><a href="furniture.html">Cookware</a></li>
												<li><a href="furniture.html">Sofas</a></li>
												<li><a href="furniture.html">Dining Tables</a></li>
												<li><a href="furniture.html">Shoe Racks</a></li>
												<li><a href="furniture.html">Home Decor</a></li>
											</ul>
										</div>
										<div class="col-sm-4">
											<ul class="multi-column-dropdown">
												<h6>Office Collection</h6>
												<li><a href="furniture.html">Carpets</a></li>
												<li><a href="furniture.html">Tables</a></li>
												<li><a href="furniture.html">Sofas</a></li>
												<li><a href="furniture.html">Shoe Racks</a></li>
												<li><a href="furniture.html">Sockets</a></li>
												<li><a href="furniture.html">Electrical Machines</a></li>
											</ul>
										</div>
										<div class="col-sm-4">
											<ul class="multi-column-dropdown">
												<h6>Decorations</h6>
												<li><a href="furniture.html">Toys</a></li>
												<li><a href="furniture.html">Wall Clock</a></li>
												<li><a href="furniture.html">Lighting</a></li>
												<li><a href="furniture.html">Top Brands</a></li>
											</ul>
										</div>
										<div class="clearfix"></div>
									</div>
								</ul>
							</li>
							<li><a href="short-codes.html">vehicles</a></li>
							<li><a href="">RENT YOUR items</a></li>
						</ul>
					</div>
					</nav>
				</div>
				<div class="logo-nav-right">
					<div class="search-box">
						<div id="sb-search" class="sb-search">
							<form>
								<input class="sb-search-input" placeholder="Enter your search term..." type="search" id="search">
								<input class="sb-search-submit" type="submit" value="">
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
						<a href="checkout.html">
							<h3> <div class="total">
								<span class="simpleCart_total"></span> (<span id="simpleCart_quantity" class="simpleCart_quantity"></span> items)</div>
								<img src="images/bag.png" alt="" />
							</h3>
						</a>
						<p><a href="javascript:;" class="simpleCart_empty">MY Cart</a></p>
						<div class="clearfix"> </div>
					</div>	
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //header --><!-- //breadcrumbs -->
<!-- single -->
	<div class="single">
		<div class="container">
			<div class="col-md-4 products-left">
				<div class="filter-price animated wow slideInUp" data-wow-delay=".5s">
					<h3>Filter By Price</h3>
					<ul class="dropdown-menu1">
							<li><a href="">								               
							<div id="slider-range"></div>							
							<input type="text" id="amount" style="border: 0" />
							</a></li>	
					</ul>
						<script type='text/javascript'>//<![CDATA[ 
						$(window).load(function(){
						 $( "#slider-range" ).slider({
								range: true,
								min: 0,
								max: 100000,
								values: [ 10000, 60000 ],
								slide: function( event, ui ) {  $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
								}
					 });
					$( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) + " - $" + $( "#slider-range" ).slider( "values", 1 ) );


						});//]]>
						</script>
						<script type="text/javascript" src="js/jquery-ui.min.js"></script>
					 <!---->
				</div>
				<div class="categories animated wow slideInUp" data-wow-delay=".5s">
					<h3>Categories</h3>
					<ul class="cate">
						<li><a href="#">Best Selling</a> <span>(15)</span></li>
						<li><a href="#">Home Collections</a> <span>(16)</span></li>
							<ul>
								<li><a href="#">Cookware</a> <span>(2)</span></li>
								<li><a href="#">New Arrivals</a> <span>(0)</span></li>
								<li><a href="#">Home Decore</a> <span>(1)</span></li>
							</ul>
						<li><a href="products.html">Decorations</a> <span>(15)</span></li>
							<ul>
								<li><a href="#">Wall Clock</a> <span>(2)</span></li>
								<li><a href="#">New Arrivals</a> <span>(0)</span></li>
								<li><a href="#">Lighting</a> <span>(1)</span></li>
								<li><a href="#">Top Brands</a> <span>(0)</span></li>
							</ul>
					</ul>
				</div>
				<div class="men-position animated wow slideInUp" data-wow-delay=".5s">
					<a href="single.html"><img src="images/29.jpg" alt=" " class="img-responsive" /></a>
					<div class="men-position-pos">
						<h4>Summer collection</h4>
						<h5><span>55%</span> Flat Discount</h5>
					</div>
				</div>
			</div>
			<div class="col-md-8 single-right">
				<div class="col-md-5 single-right-left animated wow slideInUp" data-wow-delay=".5s">
					<div class="flexslider">
						<ul class="slides">
<?php
if(isset($_GET['pro_id']))
{
$product_id=$_GET['pro_id'];
$get_products="select * from products where product_id='$product_id'";
$run_products=mysqli_query($db ,$get_products);
while($row_products=mysqli_fetch_array($run_products)){
$pro_id=$row_products['product_id'];
$pro_title=$row_products['product_title'];
$pro_cat=$row_products['cat_id'];
$pro_item=$row_products['item_id'];
$pro_desc=$row_products['product_desc'];
$pro_price=$row_products['product_price'];
$pro_image1=$row_products['product_img1'];
$pro_image2=$row_products['product_img2'];
$pro_image3=$row_products['product_img3'];
echo "
							<li data-thumb='admin_area/product_images/$pro_image1'>
								<div class='thumb-image'> <img src='admin_area/product_images/$pro_image1' data-imagezoom='true'class='img-responsive'> </div>
							</li>
							<li data-thumb='admin_area/product_images/$pro_image2'>
								 <div class='thumb-image'> <img src='admin_area/product_images/$pro_image2' data-imagezoom='true'class='img-responsive'> </div>
							</li>
							<li data-thumb='admin_area/product_images/$pro_image3'
							   <div class='thumb-image'> <img src='admin_area/product_images/$pro_image3' data-imagezoom='true'class='img-responsive'> </div>
";
}
}
?>
							</li> 
						</ul>
					</div>
					<!-- flixslider -->
						<script defer src="js/jquery.flexslider.js"></script>
						<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
						<script>
						// Can also be used with $(document).ready()
						$(window).load(function() {
						  $('.flexslider').flexslider({
							animation: "slide",
							controlNav: "thumbnails"
						  });
						});
						</script>
					<!-- flixslider -->
				</div>
				<div class="col-md-7 single-right-left simpleCart_shelfItem animated wow slideInRight" data-wow-delay=".5s">
					<h2><img src='button2.jpg'> <?php echo "$pro_title"; ?></h2>
					<h2><span class="item_price"><img src='button2.jpg'><?php echo "$pro_price"; ?></span> per day</h2>
					<div class="rating1">
					</div>
					<div class="description">
						<h2><span><img src='button2.jpg'><i>Description</i></span></h2>
						<?php echo "$pro_desc"; ?>
					</div>
					
					<?php
echo"
					
<h2><span><img src='button2.jpg'><button  class='button'onclick='display()'>CALCULATE</button></span></h2>

<script type='text/javascript'>
function display()
{
 var n=prompt('enter no of days you want to have the product','value');
var result= eval(n* $pro_price);
prompt('YOU WILL HAVE TO PAY:Rs',result);
}

</script>	



<h2><span><img src='button2.jpg'><a href='checkout.php?add_cart=$pro_id'><button class='button'>RENT IT</button></a></span></h2>	
";




global $db;
$get_item_pro="select * from products where item_id='$pro_item' AND product_id!='$pro_id'";
$run_item_pro=mysqli_query($db ,$get_item_pro);
$count=mysqli_num_rows($run_item_pro);
if($count==0)
{
echo "<h2>no more products found in this category!</h2>";
}


while($row_item_pro=mysqli_fetch_array($run_item_pro)){
$pro_id=$row_item_pro['product_id'];
$pro_title=$row_item_pro['product_title'];
$pro_desc=$row_item_pro['product_desc'];
$pro_price=$row_item_pro['product_price'];
$pro_image=$row_item_pro['product_img1'];
echo"
<div id='single_product'>
<h1>SIMILAR ITEMS FOR YOU</H1>
<b><h3>$pro_title</h3></b>
<img src='admin_area/product_images/$pro_image' width='180' height='180'/><br>
<p><b>price:$pro_price</b></p>
<a href='single.php?pro_id=$pro_id' style='float:left;'> details</a>
<a href='index.php?add_cart=$pro_id'><button style='float:right;'>ADD TO CART</button></a>
";
}









if (isset($_GET['add_cart']))
{
global $db;
$ip=getIp();
$pro_id=$_GET['add_cart'];
$check_pro="select * from cart where ip_add='$ip' AND p_id='$pro_id'";
$run_check=mysqli_query($db,$check_pro);
if(mysqli_num_rows($run_check)>0){
echo "";
}
else{
$insert_pro="insert into cart (p_id,ip_add)values('$pro_id','$ip')";
$run_pro=mysqli_query($db,$insert_pro);
echo"<script='text/javascript'> window.open('checkout.php','self')</script>";
}
}


?>		
	
				</div>
				<div class="clearfix"> </div>
				
<!-- //single -->

<!-- //single-related-products -->
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