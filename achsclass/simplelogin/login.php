<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">

body
	{
		font-family:Tahoma, Geneva, sans-serif;
		font-size:16px;
	}

table
	{
		background-color:#000;
	}
	
td
	{
		background-color:#FFF;
		padding:10px;
	}

</style></head>

<body>
<h1>LOGIN</h1>
<?php
if(isset($_GET['err'])&&$_GET['err']=='yes')
	{
	
?>
<span style="color:#F00">Username/Password Incorrect!</span>
<?php
	}
?>

<?php
if(isset($_GET['err'])&&$_GET['err']=='logout')
	{
?>
<span style="color:#030">You are successfully logout</span>
<?php
	}
?>
<form method="post" action="action.php" name="login" id="login">
<table width="500" border="0" align="center" cellpadding="0" cellspacing="1">
  <tr>
    <td width="93">Username</td>
    <td width="407"><input type="text" name="username" id="username" /></td>
  </tr>
  <tr>
    <td>Password</td>
    <td><input type="password" name="password" id="password" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" value="Login" /></td>
  </tr>
</table>
</form>
</body>
</html>