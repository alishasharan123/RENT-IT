<?php
include("includes/db.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>

<script type="text/javascript"></script>
<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' });</script>
  <title>ALISHA</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>





<form method="POST" action="insprod.php" enctype="multipart/form-data">
<table width="700" align="center" border="2" bgcolor="#336633">
<tr>
<td colspan="2"><h2>INSERT NEW PRODUCTS:</h2></td>
</tr>
<tr>
<td>PRODUCT TITLE</td>
<td><input type="text"name="product_title" size="50"/></td>
</tr>
<tr>
<td>PRODUCT CATEGORY </td>
<td>
<select name="product_cat">
<option>select a category</option>
<?php
$get_cats="select * from categories";
$run_cats=mysql_query($get_cats);
while($row_cats=mysql_fetch_array($run_cats))
{
$cat_id=$row_cats['cat_id'];
$cat_title=$row_cats['cat_title'];



        echo "<option value='$cat_id'>$cat_title</option>";
}
?>
</select>

</td>
</tr>
<tr>
<td>PRODUCT ITEM</td>
<td><select name="product_item">
<option>select an item</option>
<?php
echo"<option><h1><i>HOUSEHOLD GOODS</h1></option>";
$get_item="select * from household";
$run_item=mysql_query($get_item);
while($row_item=mysql_fetch_array($run_item))
{
$item_id=$row_item['item_id'];
$item_title=$row_item['item_title'];
        echo "<option value='$item_id'>$item_title</option>";
}
echo"<option>FASHION</option>";
$get_item="select * from fashion";
$run_item=mysql_query($get_item);
while($row_item=mysql_fetch_array($run_item))
{
$item_id=$row_item['item_id'];
$item_title=$row_item['item_title'];
        echo "<option value='$item_id'>$item_title</option>";
}
echo"<option><h1><i>ELECTRONICS</h1></option>";

$get_item="select * from electronics";
$run_item=mysql_query($get_item);
while($row_item=mysql_fetch_array($run_item))
{
$item_id=$row_item['item_id'];
$item_title=$row_item['item_title'];
        echo "<option value='$item_id'>$item_title</option>";
}
echo"<option><h1><i>VEHICLES</h1></option>";
$get_item="select * from vehicles";
$run_item=mysql_query($get_item);
while($row_item=mysql_fetch_array($run_item))
{
$item_id=$row_item['item_id'];
$item_title=$row_item['item_title'];
        echo "<option value='$item_id'>$item_title</option>";
}


?>
</select>
</td>
</tr>
<tr>
<td>PRODUCT IMAGE 1</td>
<td><input type="file"name="product_img1"/></td>
</tr>
<tr>
<td>PRODUCT IMAGE 2</td>
<td><input type="file"name="product_img2"/></td>
</tr>
<tr>
<td>PRODUCT IMAGE 3</td>
<td><input type="file"name="product_img3"/></td>
</tr>
<tr>
<td>PRODUCT PRICE</td>
<td><input type="text"name="product_price"/></td>
</tr>
<tr>
<td>PRODUCT DESCRIPTION</td>
<td><textarea name="product_desc" rows="10"col="20"></textarea></td>
</tr>
<tr>
<td>PRODUCT KEYWORDS</td>
<td><input type="text"name="product_keywords" size="50"/></td>
</tr>
<tr align="center">
<td colspan="2"><input type="submit" name="insert_product" value="insert product"/></td>
</tr>
</table>
</form>

<a href="../index.php">GO BACK</a>
</body>
</html>

<?php
$user=$_SESSION['customer_email'];

if(isset($_POST['insert_product']))
{

 $product_title=$_POST['product_title'];
$product_cat=$_POST['product_cat'];
$product_item=$_POST['product_item'];
$product_price=$_POST['product_price'];
$product_desc=$_POST['product_desc'];
$status='on';
$product_keywords=$_POST['product_keywords'];
$product_img1=$_FILES['product_img1']['name'];
$product_img2=$_FILES['product_img2']['name'];
$product_img3=$_FILES['product_img3']['name'];
$temp_name1=$_FILES['product_img1']['tmp_name'];
$temp_name2=$_FILES['product_img2']['tmp_name'];
$temp_name3=$_FILES['product_img3']['tmp_name'];
if($product_title=='' OR $product_cat=='' OR $product_item=='' OR $product_price==''  OR $product_desc=='' OR $product_keywords=='' OR $product_img1=='')
{
echo "<script type='text/javascript'>alert('please fill all the fields')</script>";
exit();
}
else
{
move_uploaded_file($temp_name1,"product_images/$product_img1");
move_uploaded_file($temp_name2,"product_images/$product_img2");
move_uploaded_file($temp_name3,"product_images/$product_img3");
$insert_product="insert into products(cat_id,item_id,customer_email,date,product_title,product_img1,product_img2,product_img3,product_price,product_desc,product_keywords,status)values('$product_cat','$product_item','$user','NOW()','$product_title','$product_img1','$product_img2','$product_img3','$product_price','$product_desc','$product_keywords','$status')";
$run_product=mysql_query($insert_product);
if($run_product)
{
echo "<script>alert('product inserted successfully')</script>";
}
}
}
?>



