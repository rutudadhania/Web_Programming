<html>
<body>
<form action="script15.php" method="get">
Enter number 1: <input type="text" name="num1" /> <br>
Enter number 2:<input type="text" name="num2" /> <br>
Enter number 3:<input type="text" name="num3" /> <br>
<input type="Submit">
</form>
</body>
</html>
<?php
$n1=$_REQUEST['num1'];
$n2=$_REQUEST['num2'];
$n3=$_REQUEST['num3'];
if($n1>$n2)
	echo "$n1 is large";
elseif ($n2>$n3)
echo "$n2 is large";
else
	echo "$n3 is large";
?>