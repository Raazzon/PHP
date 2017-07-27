<?php
include_once 'dbconnect.php';

$sql = "Select * from userdetail";

$r = mysql_query($sql);

$arr = array();
while($row=mysql_fetch_assoc($r)){
	$arr[]=$row;
}

// echo "<pre>";
// print_r ($arr);

header('Content-Type: application/json');
echo json_encode($arr);
