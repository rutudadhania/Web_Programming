<?php
//Script_41 Write a PHP script that finds the intersection of two arrays using the 
//array_intersect() function.
$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2=array("e"=>"red","f"=>"green","g"=>"blue");
$result=array_intersect($a1,$a2);
print_r($result);
?>