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
if(isset($_GET['delete_pro']))
{
$delete_id=$_GET['delete_pro'];
$delete_pro="delete from products where product_id='$delete_id'";
$run_delete=mysql_query($delete_pro);
if($run_delete)
{
echo "<script>alert('a product has been deleted')</script>";
echo "<script>window.open('index.php?view_products','_self')</script>";
}
}
?>
</body>
</html>

