<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>php</title>
</head>
<body>
<?php
include("db.php");
$query="SELECT *FROM tbl_contact ORDER BY DATE DESC";
$result=$mysqli->query($query);
?>
<table width="1000" border="1" cellpadding="2" cellspacing="2">

<tr>
<td>Date</td>
<td>Name</td>
<td>Address</td>
<td>Gender</td>
<td>Phone</td>
<td>Detail</td>
<td>Action</td>
</tr>

<?php
while($row=$result->fetch_array()){
?>
<tr>
<td><?php echo $row['date']?></td>
<td><?php echo $row['name']?></td>
<td><?php echo $row['address']?></td>
<td><?php echo $row['gender']?></td>
<td><?php echo $row['phone']?></td>
<td><?php echo $row['detail']?></td>
<td><a href="edit.php">Edit</a><a href="delete.php"> Delete</a></td>
</tr>
<?php
}
?>
</table>

<br/>

<form method="post" action="insert.php">
Name:<input type="text" name="name" /><br />
Email:<input type="text" name="email" /><br />
PhoneNo:<input type="text" name="phone" /><br />
Gender:<input type="radio" name="gender" value="male" />Male
	<input type="radio" name="gender" value="female"/>Female<br />
Address:<input type="text" name="address" /><br />
Details:<textarea name="detail"></textarea><br />
<input type="submit" name="submit" />
</form>
</body>
</html>