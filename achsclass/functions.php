<?php
function myupload($field,$destination,$filetype)
	{
		$name = $_FILES[$field]['name'];
		$name_break = explode('.',$name);
		$ext = $name_break[count($name_break)-1];
		if($ext==$filetype)
			{
				if(move_uploaded_file($_FILES[$field]['tmp_name'],$destination))return true; 
				else return false;
			}
		else return false;
	}

//################################################
//################################################
//################################################



function imgresize($newheight,$newwidth,$filename,$newimage_name)
	{
	//$newimage_name="img/$newimage_name";
	//$filename = 'test.jpg';
	list($width, $height) = getimagesize($filename);
	$thumb = imagecreatetruecolor($newwidth, $newheight);
	$source = imagecreatefromjpeg($filename);
	imagecopyresized($thumb, $source, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);
	if(imagejpeg($thumb,$newimage_name,100))return true; else return false;
	}

//################################################
//################################################
//################################################

function getwatermark($watermark_src='watermark.png',$src_img,$dest_image,$align='center')
	{
	
	if(!isset($src_img)&&!isset($dest_image))return false;
	
	$watermark = imagecreatefrompng($watermark_src);
	$watermark_width = imagesx($watermark);
	$watermark_height = imagesy($watermark);
	//echo a;

	$image = imagecreatetruecolor($watermark_width, $watermark_height);
	
	if(eregi('.gif',$src_img))$image = imagecreatefromgif($src_img);
	elseif(eregi('.jpeg',$src_img)||eregi('.jpg',$src_img))$image = imagecreatefromjpeg($src_img);
	elseif(eregi('.png',$src_img))$image = imagecreatefrompng($src_img);
	else return false;
	//echo a;
	$size = getimagesize($src_img);
	
	if($align=='center')
		{
		$dest_x = (($size[0])/2) - (($watermark_width)/2);
		$dest_y = (($size[1])/2) - (($watermark_height)/2);
		}
		
	
	if($align=='lft_top')
		{
		$dest_x = 20;
		$dest_y = 20;
		}
		
	if($align=='lft_bottom')
		{
		$dest_x = 20;
		$dest_y = $size[1] - 20 - $watermark_height;
		}
		
	
	if($align=='right_top')
		{
		$dest_x = $size[0] - 20 - $watermark_width;
		$dest_y = 20;
		}
		
	
	if($align=='right_bottom')
		{
		$dest_x = $size[0] - 20 - $watermark_width;
		$dest_y = $size[1] - 20 - $watermark_height;
		}
		
	
	
	imagecolortransparent($watermark,imagecolorat($watermark,0,0));

	imagecopyresampled($image, $watermark, $dest_x, $dest_y, 0, 0, $watermark_width, $watermark_height, $watermark_width, $watermark_height);
	
	$newimage_name = $dest_image;
	
	if(imagejpeg($image,$newimage_name,85))return true; else return false;
	
	
	}

//################################################
//################################################
//################################################


function ImageResizeWithCrop($newwidth,$newheight,$source,$destination)
	{
	$nw=$newwidth; //The Width Of The Thumbnails
	$nh=$newheight; //The Height Of The Thumbnails

//$ipath = "/web/you/etc/"; //Path To Place Where Images Are Uploaded. No Trailing Slash
$tpath = "images";//Path To Place Where Thumbnails Are Uploaded. No Trailing Slash

/*
You will need to go down in the code below, and change the image names. Currently it is set as "$img".
The outputted thumbnail's name is: "$thumb".
*/

$img = $source;


$dimensions = GetImageSize($img);

$thname = $destination;

$w=$dimensions[0];
$h=$dimensions[1];

$img2 = ImageCreateFromJpeg($img);
$thumb=ImageCreateTrueColor($nw,$nh);
	
$wm = $w/$nw;
$hm = $h/$nh;
	
$h_height = $nh/2;
$w_height = $nw/2;
	
if($w > $h)
	{
	$adjusted_width = $w / $hm;
	$half_width = $adjusted_width / 2;
	$int_width = $half_width - $w_height;
	ImageCopyResampled($thumb,$img2,-$int_width,0,0,0,$adjusted_width,$nh,$w,$h); 
	if(ImageJPEG($thumb,$thname,95))$err = false; else $err = true; 
	}

elseif(($w < $h) || ($w == $h))
	{
	$adjusted_height = $h / $wm;
	$half_height = $adjusted_height / 2;
	$int_height = $half_height - $h_height;
	ImageCopyResampled($thumb,$img2,0,-$int_height,0,0,$nw,$adjusted_height,$w,$h); 
	if(ImageJPEG($thumb,$thname,95))$err = false; else $err = true;
	}
	
else
	{
	ImageCopyResampled($thumb,$img2,0,0,0,0,$nw,$nh,$w,$h); 	
	if(ImageJPEG($thumb,$thname,95))$err = false; else $err = true; 
	}

imagedestroy($img2);

if($err)return false; else return true;
	}

//################################################
//################################################
//################################################

?>