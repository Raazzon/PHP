<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login</title>

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
	
</style>

</head>

<body>
<h1 style="text-align:center">PMS</h1>


<?php
if(isset($_GET['err']))
	{
?>
<p style="text-align:center; color:red
">Username / Password Incorrect</p>
<?php
	}
?>
<form method="post" name="login" id="login" action="loginaction.php">
<table width="500" border="0" align="center" cellpadding="0" cellspacing="1">
  <tr>
    <td width="226">User Name</td>
    <td width="271"><input type="text" name="un" id="un" /></td>
  </tr>
  <tr>
    <td>Password</td>
    <td><input type="password" name="pwd" id="pwd" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="button" id="button" value="Login" /></td>
  </tr>
</table>
</form>


<p>&nbsp;</p>
</body>
</html>