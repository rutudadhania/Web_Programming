<?php
$start=$_GET['startval'];
$end=$_GET['endval'];
echo "<table border=1 bgcolor='pink'>";

for($i=1;$i<=10;$i++)
{
  echo "<tr>";
  for($j=$start;$j<+$end;$j++)
  {
    $m=$j*$i;
	echo "<td>$j</td> <td>X</td> <td>$i</td> <td>=</td> <td>$m</td> <td bgcolor='yellow'></td>";
  }
  echo "</tr>";
}
?>