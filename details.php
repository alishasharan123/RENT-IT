<?php
include("includes/db.php");
include("functions/functions.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>ALISHA</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<style>
.jumbotron
{
color:red;
}
.container
{
color:black;
}
#headline
{
background:#000;
color:#fff;

height:35px;
width:600px;
padding:10 px;
float:right;
}
#headline_content
{
float:right;
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
</head>
<body data-spy="scroll" data-target="#my-navbar">




<div class="jumbotron">
<center><h1>SHOP ONLINE</h1>
</div>
<nav class="navbar navbar-inverse navbar-fixed-top" id="my-navbar"> 
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="navbar-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
        <span class="icon-bar"></span>                       
      </button>
      <a href="" class="navbar-brand">WELCOME</a>
    </div>
    <div class="collapse navbar-collapse" id="navbar-collapse">
      <ul class="nav navbar-nav">
        <li><a href="com.php">HOME</a></li>
        <li><a href="all_products.php">ALL PRODUCTS</a>
        <li><a href="my_account.php">MY ACCOUNT</a>
        <li><a href="user_register.php">SIGN UP</a>
<li><a href="contact">CONTACTS </a>
      </ul>

</nav>

<div id="form">
<form method="get" action="results.php" >
<input type="text" name="user_query" placeholder="search a product"/>
<input type="submit"name="search" value="search"/>
</form>
</div>
</div>
<div class="row">
<div class="col-md-2">
<h3>PRODUCTS</h3>
<ul class="list-group">

<?php
getCats();
?>
        <li class="list-group-item list-group-item-info"><a href="#gallery">MOBILE</a>
        <li class="list-group-item list-group-item-success"><a href="#features">CAMERA</a>
        <li class="list-group-item list-group-item-info"><a href="#faq">TABLETS</a>
<li class="list-group-item list-group-item-success"><a href="#contact">COMPUTERS</a>
      </ul>
<h3>BRANDS</h3>
<ul class="list-group">
<?php
getBrands();
?>
        <li class="list-group-item list-group-item-warning"><a href="#feedback">MOTOROLA</a>
        <li class="list-group-item list-group-item-danger"><a href="#gallery">NOKIA</a>
        <li class="list-group-item list-group-item-warning"><a href="#features">HP</a>
        <li class="list-group-item list-group-item-danger"><a href="#faq">DELL</a>
<li class="list-group-item list-group-item-warning"><a href="#contact">SONY</a>
      </ul>
</div>
<div id="right_content">
<div id="headline">
<div id="headline_content">
<b>welcome guest!</b>
<b style="color:yellow;">shopping cart:</b>
<span>items: -price:</span>
</div>
</div>
<div id="product_box">
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
$pro_brand=$row_products['brand_id'];
$pro_desc=$row_products['product_desc'];
$pro_price=$row_products['product_price'];
$pro_image1=$row_products['product_img1'];
$pro_image2=$row_products['product_img2'];
$pro_image3=$row_products['product_img3'];
echo"
<div id='single_product'>
<h3>$pro_title</h3>
<img src='admin_area/product_images/$pro_image' width='250' height='250'/>
<img src='admin_area/product_images/$pro_image' width='250' height='250'/>
<img src='admin_area/product_images/$pro_image' width='250' height='250'/><br>
<p><b>price:$pro_price</b></p>
<p>$pro_desc</p>
<a href='com.php' style='float:left;'> go back</a>
<a href='com.php?add_cart=$pro_id'><button style='float:right;'>ADD TO CART</button></a>
</div>
";
}
}
?>

</div>
</div>
</div>
</body>
</html>