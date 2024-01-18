<html>
<body>
<form action="script16.php" method="get">
Enter String:<input type="text" name="str" /> <br>
<input type="Submit">
</form>
</body>
</html>
<?php
error_reporting(0);
$a=$_REQUEST['str'];
$b=strlen($a);
for($i=0;$i<=$b;$i++)
{
  if($a[$i]=='A' || $a[$i]=='E' || $a[$i]=='I' || $a[$i]=='O' || $a[$i]=='U')
  { 
    $c=$c+1;
  }
}
echo "You have entered this much vowels= ".$c

//echo strlen("$s");
?>
  
  
  