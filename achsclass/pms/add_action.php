<?php
include('db.php');
if(!isset($_SESSION['login'])||$_SESSION['login']!='yes')
	{
		header("Location: login.php");
		exit;
	}
	


$title = $_POST['title'];
$qty = $_POST['qty'];
$rate = $_POST['rate'];
$today = date("Y-m-d H:i:s");

$query = "INSERT INTO tbl_products (`id`,`title`,`date_added`,`qty`,`rate`) VALUES (NULL,'$title','$today','$qty','$rate')";

mysql_query($query);

header("Location: main.php");


?>