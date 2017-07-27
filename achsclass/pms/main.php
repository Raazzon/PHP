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
<p><a href="add.php" class="add">Add New Product</a></p>
<table width="100%" border="0" cellspacing="1" cellpadding="0">
  <tr class="head">
    <td>Date</td>
    <td>Title</td>
    <td>Qty</td>
    <td>Rate</td>
    <td>Amount</td>
    <td>Action</td>
  </tr>
  
  
  <?php
  $query = "SELECT * FROM tbl_products ORDER BY `date_added` DESC";
  $result = mysql_query($query);
  $num = mysql_num_rows($result);
  $total = 0;
  for($i=1; $i<=$num; $i++)
  	{
		$row = mysql_fetch_array($result);
  ?>
  <tr>
    <td><?php echo $row['date_added']?></td>
    <td><?php echo $row['title']?></td>
    <td><?php echo $row['qty']?></td>
    <td><?php echo $row['rate']?></td>
    <td><?php $amount = $row['qty']*$row['rate'];
	$total = $total+$amount;
	 echo $amount;?></td>
    <td><a href="edit.php?id=<?php echo $row['id']?>">Edit</a> | <a href="delete.php?id=<?php echo $row['id']?>" onclick="Javascript: return confirm('Are you sure you want to delete')">Delete</a></td>
  </tr>
  <?php
	}
  ?>
  
  
  
  
  <tr class="head">
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>Total</td>
    <td><?php echo $total;?></td>
  </tr>
</table>
<p>&nbsp;</p>
<p>&nbsp;</p>
</body>
</html>