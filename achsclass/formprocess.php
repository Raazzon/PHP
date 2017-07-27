<?php
$name = $_POST['name'];
$pass = $_POST['pwd'];
$gender = $_POST['gen'];
$university = array();

if(isset($_POST['u1']))
	{
		//echo 'aa';
		array_push($university,$_POST['u1']);
	}

if(isset($_POST['u2']))array_push($university,$_POST['u2']);
if(isset($_POST['u3']))array_push($university,$_POST['u3']);

//var_dump($university);
$university_data = implode(',',$university);

$country = $_POST['country'];
$detail = $_POST['detail'];

$msg = "You have a form filled up data<br>
Name: $name <br>
Password: $pass <br>
Gender: $gender<br>
University : $university_data<br>
Country : $country<br>
Detail: $detail
";

$head  = "MIME-Version: 1.0\r\n";
$head .= "Content-type: text/html; charset=iso-8859-1\r\n";
$headers .= "From: Ram <ram@hotmail.com>\r\n";



mail('abc@abc.com','Test Email',$msg,$headers);

//$name = $_POST['name'];
?>