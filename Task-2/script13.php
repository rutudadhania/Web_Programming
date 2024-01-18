<html>
<body>
<form action="script13.php" method="get">
Enter value for celcius: <input type="text" name="cel">
<input type="Submit">
</form>
</body>
</html>

<?php
$c=$_REQUEST['cel'];
$farenheit=($c*9/5) + 32;
echo "$farenheit";
?>