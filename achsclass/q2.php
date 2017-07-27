<?php session_start();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
.error
{
	width:500px;
	
	height:30px;
	
	padding-top:10px;
	padding-left:10px;
	background-color:#900;
	color:#FFF;
}
</style>
</head>

<body>
<h1>Feedback Form</h1>
<?php
if(isset($_GET['err']))
	{
		if($_GET['err']=='name')$msg = 'Name field is empty';
		elseif($_GET['err']=='email')$msg = 'Email field is empty';
		elseif($_GET['err']=='invalidemail')$msg = 'Invalid Email';
		elseif($_GET['err']=='phone')$msg = 'Phone field is empty';
		elseif($_GET['err']=='address')$msg = 'Address field is empty';
		elseif($_GET['err']=='comment')$msg = 'Comment field is empty';
?>
<div class="error">[ x ] Error! <?php echo $msg?></div>
<?php
	}
?>
<form id="form1" name="form1" method="post" action="q2_action.php">
  <table width="500" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td width="117" height="50">Name</td>
      <td width="383"><input type="text" name="name" id="name" value="<?php if(isset($_SESSION['name']))echo $_SESSION['name']?>" /></td>
    </tr>
    <tr>
      <td height="50">Email</td>
      <td><input type="text" name="email" id="email" value="<?php if(isset($_SESSION['email']))echo $_SESSION['email']?>"/></td>
    </tr>
    <tr>
      <td height="50">Phone</td>
      <td><input type="text" name="phone" id="phone" value="<?php if(isset($_SESSION['phone']))echo $_SESSION['phone']?>" /></td>
    </tr>
    <tr>
      <td height="50">Address</td>
      <td><input type="text" name="address" id="address" value="<?php if(isset($_SESSION['address']))echo $_SESSION['address']?>"/></td>
    </tr>
    <tr>
      <td height="50">Comment</td>
      <td><textarea name="comment" rows="8" id="comment"><?php if(isset($_SESSION['comment']))echo $_SESSION['comment']?></textarea></td>
    </tr>
    <tr>
      <td height="50">&nbsp;</td>
      <td><input type="submit" name="button" id="button" value="Submit" /></td>
    </tr>
  </table>
</form>
</body>
</html>
