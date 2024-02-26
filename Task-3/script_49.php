<?php
//Script_49 Develop a PHP script to split an array into chunks of a specified size using the 
//array_chunk() function.
$a=array(1,2,3,4,5,6);
print_r($a);
$c=(array_chunk($a,2));
print_r($c);
?>