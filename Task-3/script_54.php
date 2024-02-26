<?php
//Script_54 Create a PHP script that extracts a specific column from a multidimensional 
//array using the array_column() function.
$a=array(array('front'=>"red",'background'=>"green"),array('front'=>"grey",'background'=>"pink"),
array('front'=>"blue",'background'=>"yellow"));
print_r($a);
echo "<br>";
print_r(array_column($a,'front'));
?>