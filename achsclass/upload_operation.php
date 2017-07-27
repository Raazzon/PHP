<?php

include('functions.php');

//echo '<pre>';
/*
$name = $_FILES['abc']['name'];

$name_break = explode('.',$name);
$ext = $name_break[count($name_break)-1];

$tmplocation = $_FILES['abc']['tmp_name'];
$type = $_FILES['abc']['type'];
//if($type=='image/jpeg')
	//{
if($ext=='jpg')
	{
if(move_uploaded_file($tmplocation,'uploads/'.$name))
	{
		echo 'Uploaded';
	}
else echo 'Not Uploaded';
	}
else echo "Wrong File type!";
*/

$filename = date("Ymdhis").'.jpg';
$filename_thumb = $filename.'_thumb.jpg';
//exit;
if(myupload('image','jpg/'.$filename,'jpg'))
	{
		if(imgresize(200,200,"jpg/$filename","jpg/$filename_thumb"))echo 'Image resized'; else echo 'error in resize';
	}
else 'Error in upload';
?>