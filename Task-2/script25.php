<html>
<body>
	<form method="post">
	number1:<input type="number" name="num1">
	number2:<input type="number" name="num2">
	<input type="submit" name="submit">
	</form>
</body>

</html>

<?php
$a=$_REQUEST['num1'];
$b=$_REQUEST['num2'];
//using arithmetic operation.
$a=$a+$b;
$b=$a-$b;
$a=$a-$b;
echo "Value of a: $a </br>";
echo "Value of b: $b </br>";
?>