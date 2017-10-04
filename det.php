<?php
include("includes/db.php");
include("functions/functions.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>






<style>
.dropbtn {
    background-color: #4CAF50;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;
}

.dropdown:hover .dropbtn {
    background-color: #3e8e41;
}
</style>

<title>Smart Shop a Ecommerce Online Shopping Category Flat Bootstrap Responsive Website Template | Home :: w3layouts</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Smart Shop Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- pignose css -->
<link href="css/pignose.layerslider.css" rel="stylesheet" type="text/css" media="all" />


</head>
<body>
<body data-spy="scroll" data-target="#my-navbar">
	<nav class="navbar navbar-inverse navbar-fixed-top" id="my-navbar"> 
    		<div class="navbar-header">
      			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="navbar-collapse">
        			<span class="icon-bar"></span>
       				<span class="icon-bar"></span>
        			<span class="icon-bar"></span> 
        			<span class="icon-bar"></span>                       
      			</button>
      			<a href="index.php" class="navbar-brand">SITENAME</a>
    		</div>
    		<div class="collapse navbar-collapse" id="navbar-collapse">
     			<ul class="nav navbar-nav">	
			<?php 
				cart();
			?>
			<li><a href="admin_area/insprod.php">RENT OUT</a></li> 
        		<li><a href="cart.php">ADD TO CART</a></li>
        		<li><a href="cart.php">TOTAL ITEMS: <?php total_items()?></a></li>
			<li><a href="cart.php">TOTAL PRICE: <?php total_price()  ?></a></li>
        		<li><a href="customer/my_account.php">MY ACCOUNT</a></li>
      			<li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li> 
			
			<?php
				if(isset($_SESSION['customer_email']))
				{
					echo "<b>WELCOME:</b>".$_SESSION['customer_email']."<b style='color:skyblue;'>YOUR</b>";
				}
				else
				{
					echo "<b>WELCOME GUEST:</b>";
				}
			?>
    			<li>
			<?php
				if(!isset($_SESSION['customer_email']))
				{
					echo "<a href='checkout.php' style='color:orange;'>LOGIN</a>";
				}
				else
				{
				echo"<a href='logout.php' style='color:orange;'>LOGOUT</a>";
				}
			?>
			</ul>
			</li>
			<p style="align:centre;margin-left:200px;">
			<div id="form">
				<form method="get" action="res.php" >
					<input type="text" name="user_query" placeholder="search a product"/>
					<input type="submit"name="search" value="search"/>
				</form>
			</div>
			</p>
			    
			</div>
			</nav>









</body>
</html>
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
echo"
<div id='single_product'>
<h3>$pro_title</h3>
<img src='admin_area/product_images/$pro_image1' width='250' height='250'/>
<img src='admin_area/product_images/$pro_image2' width='250' height='250'/>
<img src='admin_area/product_images/$pro_image3' width='250' height='250'/><br>
<p><b>price:$pro_price</b></p>
<p>$pro_desc</p>
<a href='index.php' style='float:left;'> go back</a>
<a href='com.php?add_cart=$pro_id'><button style='float:right;'>ADD TO CART</button></a>
</div>
";
}
}
?>
