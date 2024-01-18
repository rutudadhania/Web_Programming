<html>
<body>
<form action="script20.php" placeholder="Enter a number" method="get">
Enter value:<input type="text" name="num"/> <br>
<input type="Submit">
</form>
</body>
</html>

<?php
$no=$_REQUEST['num'];
$fact=1;
for($i=$no;$i>0;$i--)
{
  $fact=$fact*$i;
}
echo "Factorial of the number:".$fact;
?>