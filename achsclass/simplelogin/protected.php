<?php
session_start();
if(!isset($_SESSION['a'])&&$_SESSION['a']!='yeslogin')
	{
		echo "<h1>Don't Be too smart. We know you are 21st century kid</h1>";
		exit;
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<h2>This is a one of the protected page in the website. Unauthorized enty in this page is prohibited.<br>
<a href="Javascript: void(0)" onclick="Javascript: top.location = 'logout.php'">Logout</a>
</h2>
</body>
</html>