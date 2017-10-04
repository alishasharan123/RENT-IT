<?php
include("includes/db.php");
?>
<?php
global $db;
if(isset($_GET['edit_pro']))
{
$get_id=$_GET['edit_pro'];
$get_pro="select * from products where product_id='$get_id'";
$run_pro=mysqli_query($db,$get_pro);
$i=0;
$row_pro=mysqli_fetch_array($run_pro);
$pro_id=$row_pro['product_id'];
$pro_title=$row_pro['product_title'];
$product_img1=$row_pro['product_img1'];
$product_img2=$row_pro['product_img2'];
$product_img3=$row_pro['product_img3'];
$pro_price=$row_pro['product_price'];
$pro_desc=$row_pro['product_desc'];
$pro_keywords=$row_pro['product_keywords'];
$cat_id=$row_pro['cat_id'];
$item_id=$row_pro['item_id'];
$get_cat="select * from categories where cat_id='$cat_id'";
$run_cat=mysqli_query($db,$get_cat);
$row_cat=mysqli_fetch_array($run_cat);
$category_title=$row_cat['cat_title'];


}


?>
<!DOCTYPE html>
<html lang="en">
<head>

<script type="text/javascript"></script>

<style>
.button {
  border-radius: 4px;
  background-color: #ff80ff;
  border: none;
  color: #800080;
  text-align: center;
  font-size: 28px;
  padding: 20px;
  width:400 px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '»';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}
</style>


<style>


input[type=text] {
    width: 130px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
    background-color:#ffe6f2;
    background-image: url('searchicon.png');
    background-position: 10px 10px;
    background-repeat: no-repeat;
    padding: 12px 20px 12px 40px;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
}

input[type=text]:focus {
    width: 75%;
}



.button {
  padding: 7px 20px;
  font-size: 24px;
  text-align: center;
  cursor: pointer;
  outline: none;
  color: #ffcccc;
  background-color: #cc0066;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #ff99cc;
}

.button:hover {background-color: #660033;}

.button:active {
  background-color: #800040;
  box-shadow: 0 5px #ff99cc;
  transform: translateY(4px);
}
</style>
</style>
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





<form method="POST" action="" enctype="multipart/form-data">
<table width="795" align="center" border="2" bgcolor="#336633">
<tr>
<td colspan="2"><h2>EDIT AND UPDATE PRODUCT</h2></td>
</tr>
<tr>
<td>PRODUCT TITLE</td>
<td><input type="text"name="product_title" size="50" value="<?php echo $pro_title; ?>"/></td>
</tr>
<tr>
<td>PRODUCT CATEGORY </td>
<td>
<select name="product_cat">
<option>
<?php echo $category_title ; ?></option>
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
<option>select</option>
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
<td><input type="file"name="product_img1"/><img src="product_images/<?php echo $product_img1;?>" width="60" height="60"/></td>
</tr>
<tr>
<td>PRODUCT IMAGE 2</td>
<td><input type="file"name="product_img2"/><img src="product_images/<?php echo $product_img2;?>" width="60" height="60"/></td>
</tr>
<tr>
<td>PRODUCT IMAGE 3</td>
<td><input type="file"name="product_img3"/><img src="product_images/<?php echo $product_img3;?>" width="60" height="60"/></td>
</tr>
<tr>
<td>PRODUCT PRICE</td>
<td><input type="text"name="product_price" value="<?php echo $pro_price; ?>"/></td>
</tr>
<tr>
<td>PRODUCT DESCRIPTION</td>
<td><textarea name="product_desc" rows="10"col="20"><?php echo $pro_desc; ?></textarea></td>
</tr>
<tr>
<td>PRODUCT KEYWORDS</td>
<td><input type="text"name="product_keywords" size="50" value="<?php echo $pro_keywords; ?>"/></td>
</tr>
<tr align="center">
<td colspan="2"><button type="submit" name="update_product" class="button"><span>UPDATE PRODUCT</span></button></td>
</tr>
</table>
</form>

<a href="../index.php">GO BACK</a>
</body>
</html>

<?php
global $db;
echo "hello";
if(isset($_POST['update_product']))
{
$update_id=$pro_id;
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
echo " hello.....";


move_uploaded_file($temp_name1,"product_images/$product_img1");
move_uploaded_file($temp_name2,"product_images/$product_img2");
move_uploaded_file($temp_name3,"product_images/$product_img3");
$update_product="update products set cat_id='$product_cat',item_id='$product_item',date='NOW()',product_title='$product_title',product_img1='$product_img1',product_img2='$product_img2',product_img3='$product_img3',product_price='$product_price',product_desc='$product_desc',product_keywords='$product_keywords' where product_id='$update_id'";
$run_product=mysqli_query($db,$update_product);
if($product_title=='' OR $product_cat=='' OR $product_item=='' OR $product_price==''  OR $product_desc=='' OR $product_keywords=='')
{
echo "hllo";
echo "<script type='text/javascript'>alert('please fill all the fields')</script>";
exit();
}



if($product_img1=='' OR $product_img2=='' OR $product_img3=='' )
{
echo "hllo";
echo "<script type='text/javascript'>alert('please select the images again')</script>";
exit();
}
if($run_product)
{
echo "<script>alert('product has been updated')</script>";
echo "<script>window.open('index.php?view_products','_self')</script>";
}
}
?>



