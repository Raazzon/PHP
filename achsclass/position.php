<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
.main
	{
		height:300px;
		width:300px;
		background-color:#06F;
		color:#FFF;
		position:relative;
		font-size:30px;
		margin-top:100px;
	}
.overlapdiv
	{
		height:200px; width:200px;
		position:absolute;
		top:0px;
		left:20px;
		background-color:#090;
		z-index:100;
		}
.overlapdiv2
{
	height:200px;
	width:200px;
	position:absolute;
	top:40px;
	left:30px;
	background-color:#F00;
	z-index:500;
}
</style>
</head>

<body>

<div class="main">

<div class="overlapdiv">
This is the overlap div
</div>


<div class="overlapdiv2">
This is the overlap div 2
</div>


</div>


</body>
</html>