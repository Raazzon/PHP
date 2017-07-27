<?php
include('db.php');
$un = $_POST['un'];
$pwd = $_POST['pwd'];

$query = "SELECT * FROM tbl_users WHERE username = '$un' AND password = '$pwd'";

$result = mysql_query($query);

$num = mysql_num_rows($result);
if($num==0)
	{
		header("Location: login.php?err=yes");
	}
else
	{
		$row = mysql_fetch_array($result);
		$_SESSION['username'] = $row['username'];
		$_SESSION['login'] = 'yes';
		header("Location: main.php");
	}


?>