<?php
include("db.php");
$id=$_GET['id'];
$query="SELECT * FROM tbl_contact WHERE id='$id'";
$result=$mysqli->query($query);
$row=$result->fetch_array();
var_dump($row);
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>php</title>
</head>
<body>
<form method="post" action="update.php">
<input type="hidden" name="id" value="<?php echo $row['id']?>">
Name:<input type="text" name="name" value="<?php echo $row['name']?>" /><br />
Email:<input type="text" name="email" value="<?php echo $row['id']?>" /><br />
PhoneNo:<input type="text" name="phone" value="<?php echo $row['id']?>"/><br />
Gender:<input type="radio" name="gender" value="male" 
		<?php if($row['gender']=='male')echo"Checked"?>/>Male
	<input type="radio" name="gender" value="female"
	<?php if($row['gender']=='female')echo"Checked"?>/>Female<br />
Address:<input type="text" name="address" /><br />
Details:<textarea name="detail"></textarea><br />
<input type="submit" name="submit" />
</form>
</body>
</html>