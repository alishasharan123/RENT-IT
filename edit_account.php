<?php



?>
<!DOCTYPE html>
<html lang="en">
<head><title>RENT NOW</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Best Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script src="js/jquery.min.js"></script>
<!-- //js -->
<!-- cart -->
<script src="js/simpleCart.min.js"></script>
<!-- cart -->
<!-- for bootstrap working -->
<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
<!-- //for bootstrap working -->
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- timer -->
<link rel="stylesheet" href="css/jquery.countdown.css" />
<!-- //timer -->
<!-- animation-effect -->
<link href="css/animate.min.css" rel="stylesheet"> 
<script src="js/wow.min.js"></script>
<script>
 new WOW().init();
</script>
<!-- //animation-effect -->










</head>
	
<body>







</div>

<?php
 $ip=getIp();
?>



<?php
include("includes/db.php");
$user=$_SESSION['customer_email'];
$get_customer="select * from customers where customer_email='$user'";
$run_customer=mysqli_query($db,$get_customer);
$row_customer=mysqli_fetch_array($run_customer);
$c_id=$row_customer['customer_id'];
$name=$row_customer['customer_name'];
$email=$row_customer['customer_email'];
$pass=$row_customer['customer_pass'];
$country=$row_customer['customer_country'];
$city=$row_customer['customer_city'];
$contact=$row_customer['customer_contact'];
$address=$row_customer['customer_address'];
?>
  <form action="" method="post" enctype="multipart/form-data">

<table align="center" width="750">
<div class="form-group">
<tr>
<pre>
</pre>
<td>UPDATE YOUR  ACCOUNT</td>
</tr>
    
  
<div class="form-group">
<tr>

<td>
    
      <label for="name"><h3>NAME:</h3> </label>
</td>  
<td>
      <input type="name" class="form-control" name="name" value="<?php echo $name; ?>">
</td>
</tr>
    </div>


<div class="form-group">
<tr>

<td>
    
      <label for="name"><h3>EMAIL:</h3> </label>
</td>
<td>
      <input type="text" class="form-control" name="email" value=" <?php echo $email; ?>" >
</td>
</tr>
    </div>


<div class="form-group">
<tr>

<td>
    
      <label for="name"><h3>PASSWORD:</h3> </label>
</td>
<td>
      <input type="password" class="form-control" name="pass" value=" <?php echo $pass; ?>"  >
</td>
</tr>
    </div>


<div class="form-group">
<tr>

<td>
    
      <label for="name"><h3>CUSTOMER COUNTRY:</h3> </label>
</td>
<td>
      <input type="TEXT" class="form-control" name="country" value=" <?php echo $country; ?>" >
</td>
</tr>
    </div>






<div class="form-group">
<tr>

<td>
    
      <label for="name"><h3>CUSTOMER CITY:</h3> </label>
</td>
<td>
      <input type="TEXT" class="form-control" name="city" value=" <?php echo $city; ?>" >
</td>
</tr>
    </div>



<div class="form-group">
<tr>

<td>
    
      <label for="name"><h3>CUSTOMER CONTACT NO:</h3> </label>
</td>
<td>
      <input type="TEXT" class="form-control" name="contact" value=" <?php echo $contact; ?>" >
</td>
</tr>
    </div>


<div class="form-group">
<tr>

<td>
    
      <label for="name"><h3>CUSTOMER ADDRESS:</h3> </label>
</td>
<td><input type="TEXT" class="form-control" name="address" value=" <?php echo $address; ?>" >
</td>
</tr>
    </div>

<tr>
<td><input type="submit" name="update" value="UPDATE ACCOUNT"/>
</td>
</tr>

    </div>
<table>
</form>


</body>
</html>
<?php
global $db;
if(isset($_POST['update']))
{
$ip=getIp();

$customer_id=$c_id;
$c_name=$_POST['name'];
$c_email=$_POST['email'];
$c_pass=$_POST['pass'];
$c_country=$_POST['country'];
$c_city=$_POST['city'];
$c_contact=$_POST['contact'];
$c_address=$_POST['address'];

$update_c="update customers set customer_name='$c_name',customer_email='$c_email',customer_pass='$c_pass',customer_country='$c_country',customer_city='$c_city',customer_contact='$c_contact',customer_address='$c_address' where customer_id='$customer_id'";
$run_update=mysqli_query($db,$update_c);



 if($run_update)
{
echo "<script type='text/javascript'> alert('your account successfully updated')</script>";
echo"<script type='text/javascript'> window.open('my_account.php','_self')</script>";
}
}
?>