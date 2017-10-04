<!doctype html>
<html>
<head>
</head>
<body>
	<form action="prac2.php" method="post">
	<input type="radio" name="q1">red<br>
	<input type="radio" name="q1">green<br>
	<input type="radio" name="q1">yellow<br>
	<input type="radio" name="q1">blue<br>
	
	
	
	<input type="radio" name="q2">red<br>
	<input type="radio" name="q2">green<br>
	<input type="radio" name="q2">yellow<br>
	<input type="radio" name="q2">blue<br>
	
	
	<input type="radio" name="q3">red<br>
	<input type="radio" name="q3">green<br>
	<input type="radio" name="q3">yellow<br>
	<input type="radio" name="q3">blue<br>
	
	
	
	<input type="radio" name="q4">red<br>
	<input type="radio" name="q4">green<br>
	<input type="radio" name="q4">yellow<br>
	<input type="radio" name="q4">blue<br>
	<input type="submit" value="click">
	
</form>
	
</body>
</html>
<?php
	$con=mysqli_connect("localhost","root","","admin");
	session_start();
		if(isset($_POST['q1'])&&isset($_POST['q2'])&&isset($_POST['q3'])&&isset($_POST['q4'])){
			$y=($_POST['q1']);
			$ya=($_POST['q2']);
			$yas=($_POST['q3']);
			$yash=($_POST['q4']);
		
			$c=0;
		$c1=0;
		$sum=0;
		if($y==$ya)
		{
			$c=$c+10;
		}
		if($yas==$yash)
		{
			$c1=$c1+10;
			
		}
		$sum=$c+$c1;
		}
		
		echo $sum;

?>