<?php
include("includes/db.php");

?>
<!DOCTYPE HTML> 
<html> 
<head>
<script type='text/javascript'></script> 
<title>CONTACT US</title> 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head> 
<body background="f.jpg"> 
<center><h1> JUST A SMALL FORM AND WE ARE HERE TO HELP YOU</h1> 
<div class="container">



  <form method="POST" action="">

<table width="500"align="center" bgcolor="yellow">
<div class="form-group">
<tr>

<td>
    
      <label for="name"><h3>LOGIN TO BUY:</h3> </label>
</td>
</tr>
    </div>

<div class="form-group">
<tr>

<td>
    
      <label for="email"><h3>EMAIL: </h3></label>
</td>
<td>
      <h3><input type="text" class="form-control" name="email" placeholder="Enter email" required></h3>
</td>
</tr>
    </div>


<div class="form-group">
<tr>

<td>
    
      <label for="email"><h3>PASSWORD: </h3></label>
</td>
<td>
      <input type="password" class="form-control" name="pass" placeholder="Enter passsword" required>
</td>
</tr>
<tr>
<td colspan=3><a href="checkout.php?forgot_pass">FORGOT PASSWORD?</a></td>
</tr>
    </div>



</table>
<h2 style="float: right;"><a href="customer_register.php">REGISTER HERE</a></h2>
<input type="submit" name="login" value="login"/>
</form>    
<?php
global $db;
if(isset($_POST['login']))
{
$c_email=$_POST['email'];
$c_pass=$_POST['pass'];
$sel_c="select * from customers where customer_pass='$c_pass' AND customer_email='$c_email'";
$run_c=mysqli_query($db,$sel_c);
echo "nyu";
$check_customer=mysqli_num_rows($run_c);
if($check_customer==0)
{
echo "nyu";
echo "<script type='text/javascript'>alert('password or email is incorrect, try again!')</script>";
exit();
}
$ip=getIp();
$sel_cart="select * from cart where ip_add='$ip'";
$run_cart=mysqli_query($db,$sel_cart);
$check_cart=mysqli_num_rows($run_cart);
if($check_customer>0 AND $check_cart==0)
{
$_SESSION['customer_email']=$c_email;
echo "<script type='text/javascript'>alert('loggingsuccessful')</script>";
echo "<script type='text/javascript'>window.open('my_account.php', '_self')</script>";
}
else
{
$_SESSION['customer_email']=$c_email;
echo "<script type='text/javascript'>alert('loggingsuccessful')</script>";
echo "<script type='text/javascript'>window.open('index.php', '_self')</script>";
}
}
?>

<h2><button><a href="index.html" target="_blank">GO BACK</a></buttton></h2>



<br>
<br>
<br>
<br>
<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="footer-grids">
				<div class="col-md-3 footer-grid animated wow slideInLeft" data-wow-delay=".5s">
					<h3>Motive</h3>
					<p>WELCOME TO THE COOLEST RENTING STORE. RENT FROM ANYWHERE ANYTIME ANYTHING.<br>Here you will get best rent prices for all your choices.:)</span></p>
				</div>
				<div class="col-md-3 footer-grid animated wow slideInLeft" data-wow-delay=".6s">
					<h3>About us</h3>
					<ul>
						<li><i class="glyphicon glyphicon-user" aria-hidden="true"></i>MD- Jayshish Ranjan</span></li>
						<li><i class="glyphicon glyphicon-user" aria-hidden="true"></i><a>CEO- Alisha Sharan</a></li>
						<li><i class="glyphicon glyphicon-star-empty" aria-hidden="true"></i>copyright@RENTIT</li>
					</ul>
				</div>
				
				
				<div class="col-md-3 footer-grid animated wow slideInLeft" data-wow-delay=".6s">
					<h3>Contact Info</h3>
					<ul>
						<li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>bihar sharif, nalnda, BIHAR, INDIA-803101</span></li>
						<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:rentit96@gmail.com">rentit96.com</a></li>
						<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>+91 8609653304<br>+91 8293815049</li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="footer-logo animated wow slideInUp" data-wow-delay=".5s">
				<h2><a href="index.html">Rent It <span>rent anything</span></a></h2>
			</div>
			<div class="copy-right animated wow slideInUp" data-wow-delay=".5s">
				
			</div>
		</div>
	</div>
<!-- //footer -->

</body>
</html>