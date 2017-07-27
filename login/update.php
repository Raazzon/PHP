<?php
include 'dbconnect.php';

// $json = '{"username":"user","dob":"2016-06-01","department":"Mobile"}';

// $json = $_POST;

 

// $data = json_decode($json);

// echo '<pre>';
// print_r($data);

// $username = addslashes($_POST['username']);
$Fname = $_POST['Fname'];
$Lname = $_POST['Lname'];
$Address = $_POST['Address'];
$PNum = $_POST['PNum'];
$Email = $_POST['Email'];
$Password=$_POST['Password'];
$BloodGroup = $_POST['BloodGroup'];
$Age = $_POST['Age'];
$Gender = $_POST['Gender'];
$sql = "Insert into userdetail(Id,Fname,Lname,Address,PNum,Email,Password,BloodGroup,Age,Gender)values 
(NULL,'{$Fname}','{$Lname}','{$Address}','{$PNum}','{$Email}','{$Password}','{$BloodGroup}','{$Age}','{$Gender}')";
//$sql = 'test';
//$sql="INSERT INTO userdetail(`Id`, `Fname`, `Lname`, `Address`, `PNum`, `Email`, `Password`, `BloodGroup`, `Age`, `Gender`, `Image`) VALUES (NULL,['$Fname'],['$Lname'],['$Address'],['$PNum'],['$Email'],['$Password'],['$BloodGroup'],['$Age'],['$Gender'],['$Image'])";

$r = mysql_query($sql);
//$result = array();
/*
if($r){
	$result['status']='success';
}else {
	 $result['status']='error inserting';
}
*/

$array = array();
$array[]=$sql;//$_POST['username'];
header('Content-Type: application/json');
echo json_encode($array);
