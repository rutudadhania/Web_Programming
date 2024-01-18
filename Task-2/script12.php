<html>
<body>
<form action="script12.php" method="get">
Enter value 1:<input type="text" name="str1" />
Enter value 2:<input type="text" name="str2" />
<input type="Submit">
</form>
</body>
</html>

<?php
$a=$_REQUEST['str1'];
$b=$_REQUEST['str2'];

echo "$a ". "$b";
?>