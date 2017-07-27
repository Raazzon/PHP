<?php
function calculator($a,$b,$opt='Add')
	{
		if($opt=='Add')return $a+$b;
		if($opt=='Sub')return $a-$b;
		if($opt=='Mul')return $a*$b;
		if($opt=='Div')return $a/$b;
		if($opt=='Rem')return $a%$b;
		
			
	}

echo calculator(4,5,'Mul');

?>