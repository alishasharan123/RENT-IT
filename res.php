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
color:#800000;
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
<center><h1>RENT MEEE</h1>
</div>
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
        <li><a href="index.php">RENT OUT</a></li>

      </ul>
<ul class="nav navbar-nav navbar-right">
<li><div id="form">
<form method="get" action="res.php" >
<input type="text" name="user_query" placeholder="search a product"/>
<input type="submit"name="search" value="search"/>
</form>
</div>
</li>

        <li><a href="all_products.php">ADD TO CART</a></li>
        <li><a href="my_account.php">MY ACCOUNT</a></li>


      <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      
    </ul>

</nav>
  <div class="row">
    <div class="col-sm-3" style="background-color:#000000;">
<div class="dropdown">
    <button class="btn btn-warning dropdown-toggle" type="button" data-toggle="dropdown">HOUSEHOLD
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
      <?php
$get_item="select * from household";
$run_item=mysql_query($get_item);
while($row_item=mysql_fetch_array($run_item))
{
$item_id=$row_item['item_id'];
$item_title=$row_item['item_title'];



        echo "<li><a href='index.php?item=$item_id'>$item_title</a></li>";
}
?>
</ul>
  </div>
</div>
    <div class="col-sm-3" style="background-color:#000000;"><div class="dropdown">
    <button class="btn btn-warning dropdown-toggle" type="button" data-toggle="dropdown">FASHION
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
      <?php
$get_item="select * from fashion";
$run_item=mysql_query($get_item);
while($row_item=mysql_fetch_array($run_item))
{
$item_id=$row_item['item_id'];
$item_title=$row_item['item_title'];



        echo "<li><a href='index.php?item=$item_id'>$item_title</a></li>";
}
?>
</ul>
  </div></div>
    <div class="col-sm-3" style="background-color:#000000;">
<div class="dropdown">
    <button class="btn btn-warning dropdown-toggle" type="button" data-toggle="dropdown">ELECTRONICS
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
      <?php
$get_item="select * from electronics";
$run_item=mysql_query($get_item);
while($row_item=mysql_fetch_array($run_item))
{
$item_id=$row_item['item_id'];
$item_title=$row_item['item_title'];



        echo "<li><a href='index.php?item=$item_id'>$item_title</a></li>";
}
?>
</ul>
  </div></div>

    <div class="col-sm-3" style="background-color:#000000;"><div class="dropdown">
    <button class="btn btn-warning dropdown-toggle" type="button" data-toggle="dropdown">VEHICLES
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
      <?php
$get_item="select * from vehicles";
$run_item=mysql_query($get_item);
while($row_item=mysql_fetch_array($run_item))
{
$item_id=$row_item['item_id'];
$item_title=$row_item['item_title'];



        echo "<li><a href='index.php?item=$item_id'>$item_title</a></li>";
}
?>
</ul>
  </div></div>
  </div>

<div id="form">
<form method="get" action="results.php" >
<input type="text" name="user_query" placeholder="search a product"/>
<input type="submit"name="search" value="search"/>
</form>
</div>
</div>

<div id="product_box">
<?php
if(isset($_GET['search']))
{
$user_keyword=$_GET['user_query'];
$get_products="select * from products where product_keywords like '%$user_keyword%'";
$run_products=mysqli_query($db ,$get_products);
while($row_products=mysqli_fetch_array($run_products)){
$pro_id=$row_products['product_id'];
$pro_title=$row_products['product_title'];
$pro_cat=$row_products['cat_id'];
$pro_item=$row_products['item_id'];
$pro_desc=$row_products['product_desc'];
$pro_price=$row_products['product_price'];
$pro_image=$row_products['product_img1'];
echo"
<div id='single_product'>
<h3>$pro_title</h3>
<img src='admin_area/product_images/$pro_image' width='180' height='180'/><br>
<p><b>price:$pro_price</b></p>
<a href='details.php?pro_id=$pro_id' style='float:left;'> details</a>
<a href='index.php?add_cart=$pro_id'><button style='float:right;'>ADD TO CART</button></a>
</div>
";
}
?>

</div>

</body>
</html>