<?php
include('db.php');
if(!isset($_SESSION['login'])||$_SESSION['login']!='yes')
	{
		header("Location: login.php");
		exit;
	}
	


$title = $_POST['title'];
$id = $_POST['id'];
$qty = $_POST['qty'];
$rate = $_POST['rate'];
//$today = date("Y-m-d H:i:s");

$query = "UPDATE tbl_products SET `title` = '$title', `qty` = '$qty', `rate` = '$rate' WHERE id = '$id'";

mysql_query($query);

header("Location: main.php");


?>