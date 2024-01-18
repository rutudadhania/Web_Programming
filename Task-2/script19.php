<html>
<body>
<form action="Script19.php" method="get">
Enter value:<input type="text" name="no">
<input type="Submit">
</form>
</body>
</html>

<?php
$a=$_REQUEST['no'];
$sum=0;
for($i=1;$i<=$a;$i++)
{
   $b=$a%$i;
   if($b==0)
   {
     $sum=$sum+1;
   }
}
if($sum>2)
{
  echo "The number is prime";
}
else
{
  echo "The number is not prime";
}
?>