<?php
ini_set('max_execution_time', 3000);
include('functions.php');
for($i=1; $i<=178; $i++)
	{
		$source = 'original/a('.$i.').jpg';
		
		list($ow,$oh) = getimagesize($source);
		$nw = 500;
		$nh = ($oh/$ow)*$nw;
		
		
		$destination = 'resized/a('.$i.').jpg';
		ImageResizeWithCrop($nw,$nh,$source,$destination);
	}
?>