<?php
//Script_31 Develop a PHP script that searches for a specific element in an array using the 
//array_search() function and displays the index if found.
$arr=array("a"=>23,"b"=>12,"c"=>9,"d"=>344);
echo "Array=";
print_r($arr);
echo "<br>Array after removing duplicate values=";
echo(array_search(23,$arr));
?>