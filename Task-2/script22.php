<html>
<body>
	<form action="script22.php" method="get">
Enter value:<input type="text" name="r">
				<input type="submit" name="submit">
	</form>
</body>
</html>
<?php
	 $no=$_REQUEST['r'];
	 $pi=3.14;
	 $aoc=$pi*$no*$no;
			echo"Area of circle is:".$aoc;
?>