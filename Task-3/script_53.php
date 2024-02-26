<?php
//Script_53 Write a PHP script that removes duplicate values from an associative array using the 
//array_unique() function.
$a=array("red","green","green");
print_r($a);
echo "<br>";
print_r(array_unique($a));
?>