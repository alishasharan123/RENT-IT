<!DOCTYPE html>
<html lang="en">
<head>
  <title>ALISHA</title>
<script type='text/javascript'></script>
</head>
<body>

<pre>

</pre>

<h2>CHANGE YOUR PASSWORD</h2>
<form action="" method="post">
<table align="center">
<tr>
<td><b> ENTER CURRENT PASSWORD:</B></td>
<td><input type="password" name="current_pass"><br></td></tr><br>
<tr><td><b> ENTER NEW PASSWORD:</B></td><td><input type="password" name="new_pass"><br></td></tr><br>
<tr><td><b> ENTER NEW PASSWORD AGAIN:</B></td><td><input type="password" name="new_pass_again"></td></tr><br>
<br>
<br>
<br>


</table>

<center><input type="submit" name="change_pass" value="change password"/>

</form>
<br>
<br>
<br><br>
<br>
<br><br>
<br>
<br>

<?php
include("includes/db.php");

if(isset($_POST['change_pass']))
{
$user=$_SESSION['customer_email'];

$current_pass=$_POST['current_pass']; 
$new_pass=$_POST['new_pass']; 
$new_again=$_POST['new_pass_again']; 

$sel_pass="select * from customers where customer_pass= '$current_pass' AND customer_email='$user'";

$run_pass=mysqli_query($db,$sel_pass);
$check_pass=mysqli_num_rows($run_pass);
if($check_pass==0)
{
echo "<script type='text/javascript'>alert(' your current password is wrong')</script>";
exit();
}

if($new_pass!=$new_again)
{
echo "<script type='text/javascript'>alert(' new password do not match')</script>";
exit();
}
else
{
$update_pass="update customers set customer_pass='$new_pass' where customer_email='$user'";
$run_update=mysqli_query($db,$update_pass);
echo "<script type='text/javascript'>alert(' your password was updated succesfully')</script>";
echo "<script type='text/javascript'>window.open('my_account.php','_self')</script>";
}
}
?>

</body>
</html>