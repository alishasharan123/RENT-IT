

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
<table width="600" align="center" bgcolor="pink">
<tr>
<td>
<h2>VIEW ALL CUSTOMERS HERE</h2></td>
</tr>
<tr align="center" bgcolor="skyblue">


<th>EMAIL</th>

<th>COUNTRY</th>

<th>STATE</th>

<th>CONTACT</th>
<th>ADDRESS</th>

<th>LANDMARK</th>
</tr>
<?php
global $db;
if(isset($_GET['order']))
{
$order_id=$_GET['order'];
 $order_id;
$get_n="select * from shipping where product_id='$order_id'";
$run_n=mysql_query($get_n);
$row_n=mysql_fetch_array($run_n);

$c_email=$row_n['customer_email'];
$c_country=$row_n['cust_country'];
$c_state=$row_n['cust_state'];
$c_contact=$row_n['cust_contact'];
$c_address=$row_n['cust_address'];
$c_landmark=$row_n['cust_landmark'];
}
?>
<tr align="center">
<td><?php echo $c_email; ?></td>
<td><?php echo $c_country; ?></td>
<td><?php echo $c_state; ?></td>
<td><?php echo $c_contact; ?></td>
<td><?php echo $c_address; ?></td>
<td><?php echo $c_landmark; ?></td>
</tr>
<tr align="center">

<td><a href="admin_area/delete_c.php?delete_c=<?php echo $c_id; ?>">DELETE</a></td>
</tr>
</table>
</body>
</html>