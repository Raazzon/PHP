<?php
$host="localhost";
$user="root";
$password="";
$db="Achs";
$mysqli=new mysqli($host,$user,$password,$db);
if($mysqli->connect_error)die("Error in db connection");

?>