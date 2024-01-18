<html>
<body>
<form action="script17.php" method="get">
Enter value:<input type="text" name="no">
<input type="Submit">
</form>
</body>
</html>
<?php
//error_reporting(0);
$a=$_REQUEST['no'];
if($a%4==0)
{
  echo "$a is an leap year";
}
else
{
  echo "$a is not an leap year";
}
?>