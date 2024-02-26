<?php
//Script_52 Develop a PHP script to merge two associative arrays using the array_merge() function 
//and display the combined result.
$a=array("red","green");
$b=array("blue","yellow");
print_r($a);
echo "<br>";
print_r($b);
echo "<br>";
print_r(array_merge($a,$b));
?>