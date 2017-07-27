<?php
//

function calculate_dob($dob="1994-05-06")
	{
		$diff = strtotime(date("Y-m-d"))-strtotime($dob);
		$year = floor($diff/(60*60*24*365));		
		$remaining = $diff%(60*60*24*365);		
		$month = floor($remaining/(60*60*24*30));		
		$remaining = $remaining%(60*60*24*30);		
		$day = floor($remaining/(60*60*24));
		$string = "$year years $month months $day days";		
		return $string;
	}

function add($a,$b)
	{
		return ($a+$b);
	}
	
/*

$dob1 = "1997-06-26";
$dob2 = "1995-03-16";





$a = calculate_dob($dob1);

$b = calculate_dob($dob2);

echo $a.'<br>'.$b;


$a = 5;

function abc($a)
	{
		$a = 6;
		return $a;
	}
$a = abc($a);
echo $a;
*/





?>

<b>ACHS COLLEGE</b>
