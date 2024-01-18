<html>
<body>
	<form action="script24.php" method="get" align="center">
	number:<input type="text" name="sq"/> <br>
	       <input type="submit" name="submit">
	</form>
</body>
</html>

<?php
$num=$_REQUEST['sq'];
echo "Square root of given number is:" .sqrt($num);
?>
