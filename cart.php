<?php
session_start();
include("includes/db.php");
include("functions/functions.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>ALISHA</title><meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
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
    width: 75%;
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
<li><a href="cart.php" >TOTAL PRICE: <?php total_price()  ?>    </a></li>
        <li><a href="customer/my_account.php" >MY ACCOUNT</a></li>
 <li><a href="customer_register.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li> 
			



          

}
?>



    </ul>




</nav>




  <div class="row">
    <div class="col-sm-3" style="background-color:#000000;">
<div class="dropdown">
    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">HOUSEHOLD
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
    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">FASHION
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
    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">ELECTRONICS
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
    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">VEHICLES
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

</div>

<?php
 echo $ip=getIp();
?>
<div id="product_box">
<form action="" method="POST" enctype="multipart/form-data">
<table align="center" width="700" bgcolor="skyblue">

<tr align="center">
<th>Remove</th>
<th>Products</th>
<th>Quantity</th>
<th>Total Price</th>
</tr>
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
<tr align="center">
<td><input type="checkbox"name="remove[]" value="<?php echo $pro_id; ?>"/> </td>
<td><?php echo $product_title;?><br>


<img src="admin_area/product_images/<?php echo $product_image;?>"width="60"height="60"/>
</td>
<td><input type="text" size="4" name="qty" value="<?php  echo $_SESSION['qty'];?>"/></td>
<td> <?php echo "Rs".$single_price; ?></td>
</tr> 
<tr>
<td>
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
<b> Sub Total:</b></td>
<td><?php echo "Rs".$total; ?></td>
</tr>
<tr align="center">
<td><input type="submit" name="update_cart"value="update cart"/></td>
<td><a href="checkout.php"><button>Checkout</button></a></td>
</tr>
</table>
</form>
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
echo "<script>window.open('cart.php','_self')</script>";
}
}
}


?>


</div>

</body>
</html>