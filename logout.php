<!DOCTYPE HTML> 
<html> 
<head>
<script type='text/javascript'></script> 
</head>
<body>
<?php
session_start();
session_destroy();
echo "<script type='text/javascript'>window.open('index.php','_self')</script>";



?>
</body>
</html>

