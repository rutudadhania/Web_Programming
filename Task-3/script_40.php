<?php
//Script_40 Develop a PHP script to remove and replace elements from an array using the 
//array_splice() function.
$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2=array("a"=>"purple","b"=>"orange");
array_slice($a1,0,2,$a2);
print_r($a1);
?>