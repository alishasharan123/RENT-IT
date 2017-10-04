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
<th>S.N</th>
<th>NAME</th>
<th>EMAIL</th>

<th>DELETE</th>
</tr>
<?php
$user=$_SESSION['customer_email'];
global $db;
$get_c="select * from customers";
$run_c=mysqli_query($db,$get_c);
$i=0;
while($row_c=mysqli_fetch_array($run_c))
{
$c_id=$row_c['customer_id'];
$c_name=$row_c['customer_name'];
$c_mail=$row_c['customer_email'];

$i++;
?>
<tr align="center">
<td><?php echo $i; ?></td>
<td><?php echo $c_name ; ?></td>
<td><?php echo $c_mail; ?></td>
<td><a href="delete_c.php?delete_c=<?php echo $c_id; ?>">DELETE</a></td>
</tr>
<?php } ?>
</table>
</body>
</html>