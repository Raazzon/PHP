<?php
$name = "Saroj";
$dob = '1994-04-21';
$currentdate = date("Y-m-d");
$age_sec = strtotime($currentdate) - strtotime($dob);
$age_year = $age_sec/(60*60*24*365);

$age_year = floor($age_year);
$remaining = $age_sec%(60*60*24*365);

$age_month = floor($remaining/(60*60*24*30));

$remaining = $remaining%(60*60*24*30);
$age_day = floor($remaining/(60*60*24));

$txt = "$name is $age_year Years $age_month Months $age_day Day Old";
echo $txt;
?>
