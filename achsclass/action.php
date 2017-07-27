<?php
var_dump($_POST);
$name = $_POST['username'];
$pass = $_POST['password'];
if($name="admin"&&$passwod=="admin123")
{
	$_SESSION['login']="Yes";
	header("Location:action.php");
}
else
{
	header("Location:login.php?error=true");
}
?>