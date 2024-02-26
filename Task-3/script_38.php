<?php
//Script_38 Write a PHP script to use the array_shift() function to remove an element from the 
//beginning of an array and the array_unshift() function to add elements at the beginning.
$number=array(1=>"One",2=>"Two",3=>"Three");
echo array_shift($number);
echo "<br><br>";
$number=array(1=>"One",2=>"Two",3=>"Three");
echo array_unshift($number);
?>