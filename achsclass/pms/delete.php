<?php
include('db.php');
$id = $_GET['id'];
$query = "DELETE FROM tbl_products WHERE id = '$id'";
mysql_query($query);
//echo mysql_error();
header("Location: main.php");
?>