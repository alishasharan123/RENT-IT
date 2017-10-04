<?php
include("includes/db.php");
?>
<!doctype html>
<html>
<head>
<title>delete</title>
<script type="text/javascript"></script>
</head>
<body>
<?php
global $db;
if(isset($_GET['delete_c']))
{
$delete_id=$_GET['delete_c'];
$delete_c="delete from customers where customer_id='$delete_id'";
$run_delete=mysql_query($delete_c);
if($run_delete)
{
echo "<script>alert('a customer has been deleted')</script>";
echo "<script>window.open('index.php?view_customers','_self')</script>";
}
}
?>
</body>
</html>

