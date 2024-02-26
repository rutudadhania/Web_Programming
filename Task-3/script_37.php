<?php
//Script_37 Develop a PHP script that uses the array_push() function to add elements to an 
//array and the array_pop() function to remove elements from the end.
$a=array(10,20,30);
array_push($a,40);
print_r($a);

echo "<br><br>";

$t=array(10,20,30,40);
array_pop($t);
print_r($t);
?>