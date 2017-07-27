<?php
include("db.php");
$Name=$_POST['name'];
$Email=$_POST['email'];
$Phone=$_POST['phone'];
$Gender=$_POST['gender'];
$Address=$_POST['address'];
$Details=$_POST['detail'];
$Date=date("Y-m-d H:i:s");
$query="INSERT INTO tbl_contact(id,name,email,phone,gender,address,date,detail)
		VALUES(NULL,'$Name','$Email','$Phone','$Gender','$Address','$Date','$Details')";
$mysqli->query($query);
?>