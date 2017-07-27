<?php
$countries = array('Nepal','Tibet','Bhutan','China','Japan','Srilanka','Afganistan');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<style type="text/css">
body
{
	font-family:Tahoma, Geneva, sans-serif;
	font-size:16px;
}
</style>

<body>
<form method="post" name="testform" id="testform" action="formprocess.php">

<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="22%"><h1>Test form</h1></td>
    <td width="78%">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td height="40">&nbsp;</td>
  </tr>ff
  <tr>
    <td>Name</td>
    <td height="40"><input type="text" name="name" id="name" /></td>
  </tr>
  <tr>
    <td>Password</td>
    <td height="40"><input type="password" name="pwd" id="pwd" /></td>
  </tr>
  <tr>
    <td><p>Gender</p></td>
    <td height="40"><input type="radio" name="gen" id="gen" value="Male" checked="checked" />Male <input type="radio" name="gen" value="Female" />Female</td>
  </tr>
  <tr>
    <td>University</td>
    <td height="40"><input type="checkbox" name="u1" id="u1" value="TU" />TU <input type="checkbox" name="u2" id="u2" value="KU" />KU <input type="checkbox" name="u3" id="u3" value="PU" />PU</td>
  </tr>
  <tr>
    <td>Country</td>
    <td height="40"><select name="country" id="country">
    <option value="0">Select Country</option>
    
    <?php
	foreach($countries as $country)
		{
	?>
    <option value="<?php echo $country;?>"><?php echo $country;?></option>
    <?php
		}
	?>
    
    </select>
    </td>
  </tr>
  <tr>
    <td>File Upload</td>
    <td height="40"><input type="file" name="file" id="file" /></td>
  </tr>
  <tr>
    <td>Detail</td>
    <td height="40"><textarea cols="50" rows="10" name="detail" id="detail"></textarea></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td height="40"><input type="submit" value="Send Form" name="submit" id="submit" /></td>
  </tr>
</table>


</form>


</body>
</html>