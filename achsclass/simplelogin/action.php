<?php
session_start();
$u = 'abc';
$p = 'xyza';

//setcookie('a','Hello',time()+300000);

$un = $_POST['username'];
$pwd = $_POST['password'];


if($u==$un&&$p==$pwd)
	{
		$_SESSION['a'] = 'yeslogin';
		//$_SESSION['b'] = 'yeslogin';
		//$a = 'yeslogin';
		header("Location: protected.php");
	}
else
	{
		header("Location: login.php?err=yes");
	}
?>