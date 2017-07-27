<?php
include('db.php');
if(!isset($_SESSION['login'])||$_SESSION['login']!='yes')
	{
		header("Location: login.php");
		exit;
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Welcome to PMS</title>
<style type="text/css">

body
	{
		font-family:Tahoma, Geneva, sans-serif;
		color:#666;
	}
table
	{
		background-color:#000;
		
	}
td
	{
		background-color:#eee;
		padding:10px;
	}

tr.head td
	{
		background:#333;
		color:#FFF;
		font-weight:bold;
	}
	
.logout
	{
		display:inline-block;
		background-color:#900;
		color:#FFF;
		padding:10px;
		text-decoration:none;
	}

.logout:hover
	{
		background-color:#000;
		
	}
	
.add
	{
		display:inline-block;
		background-color:#060;
		color:#FFF;
		padding:10px;
		text-decoration:none;
	}

.add:hover
	{
		background-color:#000;
		
	}
	
</style>
</head>

<body>
<p>Welcome to PMS
</p>
<p><a href="logout.php" class="logout">Logout</a></p>
<p>&nbsp;</p>

<form method="post" name="add" id="add" action="add_action.php">
<table width="500" border="0" cellspacing="1" cellpadding="0">
  <tr>
    <td width="138">Title</td>
    <td width="359"><input type="text" name="title" id="title" /></td>
  </tr>
  <tr>
    <td>Qty</td>
    <td><input type="text" name="qty" id="qty" /></td>
  </tr>
  <tr>
    <td>Rate</td>
    <td><input type="text" name="rate" id="rate" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="button" id="button" value="Add" class="add" /></td>
  </tr>
</table>
</form>
<p>&nbsp;</p>

<p>&nbsp;</p>
<p>&nbsp;</p>
</body>
</html>