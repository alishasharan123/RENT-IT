<?php



include("includes/db.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>ALISHA</title>
<script type= 'text/javascript'> </script>
</head>
<body>
<form action=""  method="POST" >
<pre>

</pre>
<h2> DO YOU WANT TO DELETE YOUR ACCOUNT</H2>
<input type="submit" name="yes" value=" yes i want"/>
<input type="submit" name="no" value=" no"/>
</form>



<?php
global $db;
$user = $_SESSION['customer_email'];

if(isset($_POST['yes']))
{
$delete="delete from customers where customer_email='$user'";
$run_customer=mysqli_query($db,$delete);
echo "<script type=' text/javascript'> alert('account has been deleted')</script>";
echo "<script type= 'text/javascript'> window.open('../index.php','_self')</script>";
}
if(isset($_POST['no']))
{
echo "<script type= 'text/javascript'> alert('huhh')</script>";
echo "<script type= 'text/javascript'> window.open('my_account.php','_self')</script>";
}
?>
</body>
</html>