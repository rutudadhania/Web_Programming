<?php
//Script_26 Write a PHP script that generates a random number between a specified range using the 
//rand() function and displays it.


$a=rand(1,100);
?>
<html>
<style>
#div
{
	background-color:aqua;
	border-color:transparent;
}
</style>
<div id='div'>
<h1> Random Numbers Between Range [1 to 100]</h1>
<p> <?php echo $a ?></p>
</html>