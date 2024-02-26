<?php
//Script_29 Write a PHP script to reverse the elements of an array using the array_reverse() 
//function.

$arr=array(7,2,6,9,5);
echo "Array=";
print_r($arr);
$a=array_reverse($arr);
echo "<br>Array in reverse order=";
print_r($a);

?>