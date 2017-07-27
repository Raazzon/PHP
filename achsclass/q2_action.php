<?php
session_start();
function CheckEmailValidation($email)
	{
	if (@!eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$", $email))return false;
	else return true; 
	}
$name = $_POST['name'];
$_SESSION['name'] = $name;
$email = $_POST['email'];
$_SESSION['email'] = $email;
$phone = $_POST['phone'];
$_SESSION['phone'] = $phone;
$address = $_POST['address'];
$_SESSION['address'] = $address;
$comment = $_POST['comment'];
$_SESSION['comment'] = $comment;
if($name==''){header('Location: q2.php?err=name');exit;}

if($email==''){header('Location: q2.php?err=email');exit;}
if(!CheckEmailValidation($email)){header('Location: q2.php?err=invalidemail');exit;}
if($phone==''){header('Location: q2.php?err=phone');exit;}
if($address==''){header('Location: q2.php?err=address');exit;}
if($comment==''){header('Location: q2.php?err=comment');exit;}


unset($_SESSION['name']);
unset($_SESSION['email']);
unset($_SESSION['phone']);
unset($_SESSION['address']);
unset($_SESSION['comment']);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

</head>

<body>
<h1>Feedback Form</h1>

  <table width="500" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td width="117" height="50">Name</td>
      <td width="383"><?php echo $name?></td>
    </tr>
    <tr>
      <td height="50">Email</td>
      <td><?php echo $email?></td>
    </tr>
    <tr>
      <td height="50">Phone</td>
      <td><?php echo $phone?></td>
    </tr>
    <tr>
      <td height="50">Address</td>
      <td><?php echo $address?></td>
    </tr>
    <tr>
      <td height="50">Comment</td>
      <td><?php echo nl2br($comment)?></td>
    </tr>
    <tr>
      <td height="50">&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </table>
</body>
</html>
