<html>
<body>
<form action="Script10.php" method="get">
Length:<input type="text" name="length" /> <br>
Width:<input type="text" name="width" /> <br>
<input type="Submit" />
</form>
</body>
</html>

<?php
$l=$_REQUEST['length'];
$w=$_REQUEST['width'];
$area=$l*$w;
echo "The Area of Rectangle ".$area;
?>