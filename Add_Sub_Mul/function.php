<html>
<body>
<form>
Enter Nuber 1: <input type="text" name="name1" /> <br>
Enter Nuber 2: <input type="text" name="name2" /> <br>
<input type="submit" name="submit" />
</form>
</body>
</html>

<?php
error_reporting(0);
$myval1=$_REQUEST['name1'];
$myval2=$_REQUEST['name2'];
function add ($myval1,$myval2)
{
 return $myval1+$myval2;
}
function sub ($myval1,$myval2)
{
 return $myval1-$myval2;
}
function mul ($myval1,$myval2)
{
 return $myval1*$myval2;
}
$sum=add($myval1,$myval2);
echo $sum;
echo "<br>";
$sub=sub($myval1,$myval2);
echo $sub;
echo "<br>";
$mul=mul($myval1,$myval2);
echo $mul;
?>
