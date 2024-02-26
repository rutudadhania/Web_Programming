<?php
//Script_46 Develop a PHP script to fill an array with a specific value 
//using the array_fill() function.
$a=array('d'=>45,'e'=>56,'f'=>78);
print_r($a);
$a=(array_fill(2,4,"aa"));
print_r($a);
?>