<?php
include("includes/db.php");
include("functions/functions.php");
?>
<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">



<style>

input[type=text] {
    width: 130px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
    background-color:#ffe6f2;
    background-image: url('searchicon.png');
    background-position: 10px 10px;
    background-repeat: no-repeat;
    padding: 12px 20px 12px 40px;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
}

input[type=text]:focus {
    width: 50%;
}



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







#product_box
{
width:780px;
margin-left:30px;
margin-top:10px;
margin-bottom:10px;
text-align:center;
}
#single_product{
float:left;
padding:10px;
margin-right:10px;
}
#single_product img{
border:2px solid}
</style>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script type='text/javascript'></script>
<style>

input[type=text] {
    width: 130px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
    background-color: #ffcccc;
    background-image: url('searchicon.png');
    background-position: 10px 10px;
    background-repeat: no-repeat;
    padding: 12px 20px 12px 20px;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
margin-right:50px
}

input[type=text]:focus {
    width: 100%;
}


.button {
  padding: 7px 20px;
  font-size: 24px;
  text-align: center;
  cursor: pointer;
  outline: none;
  color: #ffcccc;
  background-color: #ff1a1a;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #ff8080;
}

.button:hover {background-color: #b30000}

.button:active {
  background-color: #ff0000;
  box-shadow: 0 5px #ff8080;
  transform: translateY(4px);
}


.m
{
padding-bottom:400px;
}

.upper-right
{

padding-left:75px;
padding-bottom:250px;
text color:"red";
}


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
<link rel="stylesheet" type="text/css" />
<style type="text/css">
.img1
{
border-left-style:double;
border-right-style:double;
border-top-style:double;
border-bottom-style:double;
border-left-color:double;
border-right-color:double;
border-top-color:double;
border-bottom-color:double;
}
</style>
</head>
<body data-spy="scroll" data-target="#my-navbar">
	<nav class="navbar navbar-inverse navbar-fixed-top" id="my-navbar"> 
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="navbar-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
        <span class="icon-bar"></span>                       
      </button>
      <a href="index.php" class="navbar-brand" style="color: #cc0066;">RENT  NOW</a>



<li> <?php
if(isset($_SESSION['customer_email']))
{
echo "<b style='color: #cc0066;'>WELCOME:</b>".$_SESSION['customer_email'];

}
else
{
echo " <b style='color:skyblue;'>WELCOME GUEST:</b>";
}
?> </li>
    </div>
    <div class="collapse navbar-collapse" id="navbar-collapse">
      <ul class="nav navbar-nav">
        

      </ul>
<ul class="nav navbar-nav navbar-right">

<?php 
cart();
?>
<?php
if(!isset($_SESSION['customer_email']))
{
echo "<a href='checkout.php' style='color:skyblue;'>LOGIN</a>";
}
else{
echo"<a href='logout.php' style='color:skyblue;'>LOGOUT</a>";
}
?>

<li><a href="admin_area/insprod.php">RENT OUT</a></li>
        <li><a href="cart.php">MY  CART</a></li>

        <li><a href="cart.php">TOTAL ITEMS: <?php total_items()  ?>    </a></li>
<li><a href="all_products.php" >TOTAL PRICE: <?php total_price()  ?>    </a></li>
        <li><a href="customer/my_account.php" >MY ACCOUNT</a></li>
 <li><a href="customer_register.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li> 
			



          

}
?>



    </ul>




</nav>
<div id="form" style="padding:20px;margin-top:30px;">
<form method="get" action="res.php">
<input type="text" name="user_query" placeholder="search a product"/>
<button class="button" name="search" >SEARCH</button
</form>
</div>











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
<div id='single_product'>
		<div class ='upper'>
			<table>
			<tr>
			<td>
			<iframe src='admin_area/product_images/$pro_image1' width='600' height='450'  name='iframe_a' >
			</iframe>
			</td>
			<td>
				<div class ='upper-right'>
				<h1 style='color:red;'>$pro_title</h1></br>

                               <h2><span><img src='button2.jpg'>  $pro_desc</span></h2>
  				<h2><span><img src='button2.jpg'>PRODUCT-PRICE/DAY:  $pro_price</span></h2>

				<h2><span><img src='button2.jpg'>
		
<button  class='button'onclick='display()'>CALCULATE</button>

<script type='text/javascript'>
function display()
{
 var n=prompt('enter no of days you want to have the product','value');
var result= eval(n* $pro_price);
prompt('YOU WILL HAVE TO PAY:Rs',result);
}

</script>		
		</span>
</h2>		
	

<h2><span><img src='button2.jpg'><a href='cart.php?add_cart=$pro_id'><button class='button'>RENT IT</button></a></span></h2>		
</div>
			</td>
			</tr>
			</table>
		</div>
			<table>
			<tr>
			<td>
			<p><a href='admin_area/product_images/$pro_image1'  target='iframe_a'><img src='admin_area/product_images/$pro_image1' 				width='200' height='200'/></a></p>
			</td>
			<td><p><a href='admin_area/product_images/$pro_image2'  target='iframe_a'><img src='admin_area/product_images/$pro_image2' 				width='200' height='200'/></a></p></td>
			<td ><p><a href='admin_area/product_images/			$pro_image3'  target='iframe_a'><img src='admin_area/product_images/			$pro_image3' width='200' height='200'/></a></p></td>
			</tr>
			</table>
	</div>










";
}
}





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
<a href='det1.php?pro_id=$pro_id' style='float:left;'> details</a>
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
echo"<script='text/javascript'> window.open('cart.php','self')</script>";
}
}


?>
</body>
</html>