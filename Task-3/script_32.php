<?php
//Script_32 Write a PHP script to merge two arrays using the array_merge() function and display the 
//combined result.

$b=array('a'=>"1",'b'=>"4",'c'=>"23");
echo"Array=";
print_r($b);
$a=array('d'=>45,'e'=>56,'f'=>78);
echo"<br>Array=";
print_r($a);
print_r(array_merge($a,$b));
if(array_key_exists("c",$a))
{
	echo "<br>key exists";
}
else
{
	echo "<br>key doesn't exists";
}
?>