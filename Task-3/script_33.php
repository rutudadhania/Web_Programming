<?php
//Script_33 Create a PHP script to check if a specific key exists in an 
//associative array using the array_key_exists() function.
$a=array("a"=>"Dog","b"=>"Cat");
if(array_key_exists("a",$a))
{
	echo "Key exists!";
}
else
{
	echo "Key doesn't exists!";
}
?>