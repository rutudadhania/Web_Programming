<html>
<body>
<form action="script21.php" method="get">
Enter value:<input type="text" placeholder="Enter a number" name="no"/> <br>
<input type="Submit">
</form>
</body>
</html>
<?php
$no=$_REQUEST['no'];
$check=strrev($no);
if ($check==$no)
{
  echo "Given number is pallindrome";
}
else
{
   echo "Given number is not an pallindrome";
}
?>