<?php
include("includes/db.php");
?>
<!doctype html>
<html>
<head>
<title>Admin</title>
<style>
body
{backgrond:skyblue;}
.main_wrapper
{
width:1000 px;
height:auto;
margin:auto;
}
#header{
width: 1000 px;
height:120px;
border-bottom:5px groove orange;
}   
#left{
width:795px;
height:600px;
float:left;
}

#right{
width:200px;
height:600px;
float:right;
border:5px groove orange;
background:#187eae;
}
#right a{
text-decoration:none;
color:white;
text-align:left;
font-size:18px;
font-family:palatino;
padding:10px;
margin:6px;
display:block;
}
#right a:hover{
text-decoration:underline;
font-weight:bolder;
color:orange;
}
</style>
</head>
<body>
<table width="600" align="center" bgcolor="pink" BORDER="2">
<br>
<br>

<tr align="center" bgcolor="skyblue">
<th>S.N</th>
<th>TITLE</th>
<th>IMAGE</th>
<th>PRICE</th>
<th>CLICK TO EDIT </TH>
<th>CLICK TO DELETE </TH>
<th>CLICK TO KNOW THE INTERESTED CUSTOMERS </TH>

</tr>
<?php
global $db;

$user=$_SESSION['customer_email'];
$get_pro="select * from products where customer_email='$user'";
$run_pro=mysqli_query($db,$get_pro);
$i=0;
while($row_pro=mysqli_fetch_array($run_pro))
{
$pro_id=$row_pro['product_id'];
$pro_title=$row_pro['product_title'];
$pro_image=$row_pro['product_img1'];
$pro_price=$row_pro['product_price'];
$i++;

?>
<tr align="center">
<td><?php echo $i; ?></td>
<td><?php echo $pro_title; ?></td>
<td><img src="product_images/<?php echo $pro_image; ?> " width="60" height="60"/></td>
<td><?php echo $pro_price; ?></td>
<td><a href="adindex.php?edit_pro=<?php echo $pro_id ; ?>">EDIT</a></td>
<td><a href="delete_pro.php?delete_pro=<?php echo $pro_id; ?>">DELETE</a></td>
<td><a href="my_customers.php?order=<?php echo $pro_id; ?>">INTERESTED CUSTOMERS</a></td>
</tr>
<?php } ?>
</table>
</body>
</html>