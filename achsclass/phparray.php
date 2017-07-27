<!DOCTYPE html>
<html>
<head>
	<title>Php Array</title>
</head>
<body>
<?php
$a=array(1,1.5,"Achs");
for($i=0;$i<3;$i++){
	echo $a[$i] ."<br>";
	echo '$a['.$i.']=>'.$a[$i]. "<br>";
}
?>
<?php
$x=array('Name' =>'Rajan','Phone' =>'9803066957');
foreach ($x as $key => $value) {
	echo "$key:$value<br>";
}
?>
</body>
</html>