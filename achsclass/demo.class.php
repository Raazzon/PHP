<?php

class calculator
   {
	   public $a;   
	   public $b;
	   
	   public function add($a,$b)
	       {
		       $c=$a+$b;
			   return $c; 
		   }
	   public function sub($a,$b)
	       {
		       $c=$a-$b; 
			   return $c;
		   }
	   public function mul($a,$b)
	       {
		       $c=$a*$b; 
			   return $c;
		   }
	   public function div($a,$b)
	       {
		       $c=$a/$b; 
			   return $c;
		   }
	   
	   
   }
?>