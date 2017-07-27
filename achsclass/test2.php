<?php
$color = 'red';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>


<table width="500" border="1">
<?php
for($i=1; $i<=10; $i++)
	{
?>
<tr>
<td bgcolor="#FF0000">&nbsp;</td>
<td bgcolor="#FF0000">&nbsp;</td>
</tr>
<?php
	}
?>
</table>


<select>
<?php 
for($i=1; $i<=100; $i++)
	{
		if($i!=50)echo '<option>'.$i.'</option>';
		else echo '<option selected="selected">'.$i.'</option>';
	}
?>
</select>



<select>
<?php 
$a = '';
for($i=1; $i<=100; $i++)
	{
		if($i==90)$a = ' selected="selected"'; else $a = '';
		echo '<option'.$a.'>'.$i.'</option>';
	}
?>
</select>


</body>
</html>