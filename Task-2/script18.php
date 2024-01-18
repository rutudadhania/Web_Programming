<html>
<body>
	<form action="script18.php" method="get">
Enter value:<input type="text" name="no">
	       <input type="submit" name="submit">
	</form>
</body>
</html>
<?php
$b=$_REQUEST['no'];
$a=rand(1,10);
if($a!=$b)
{
  echo "You are wrong";
}
else
{
   echo "You are right";
}