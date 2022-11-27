<?php


$alpha = "abcdefghijklmnopqrstuvwxyz";
$alpha_upper = strtoupper($alpha);
$numeric = "0123456789";
$special = "!@$#*%";


$chars = $alpha . $alpha_upper . $numeric . $special;


$length = 10;


$chars = str_shuffle($chars);


$len = strlen($chars);


$pw = '';


for ($i=0;$i<$length;$i++)
	$pw .= substr($chars, rand(0, $len-1), 1); 


$pw = str_shuffle($pw);


echo $pw;
?>