<!--
9.	Write a PHP script that creates the following table using for loops. Add cellpadding="3px" and cell spacing="0px" to the table tag. 
1 * 1 = 1	1 * 2 = 2	1 * 3 = 3	1 * 4 = 4	1 * 5 = 5
2 * 1 = 2	2 * 2 = 4	2 * 3 = 6	2 * 4 = 8	2 * 5 = 10
3 * 1 = 3	3 * 2 = 6	3 * 3 = 9	3 * 4 = 12	3 * 5 = 15
4 * 1 = 4	4 * 2 = 8	4 * 3 = 12	4 * 4 = 16	4 * 5 = 20
5 * 1 = 5	5 * 2 = 10	5 * 3 = 15	5 * 4 = 20	5 * 5 = 25
6 * 1 = 6	6 * 2 = 12	6 * 3 = 18	6 * 4 = 24	6 * 5 = 30
-->

<?php
echo "<table style= 'border: solid 1px; padding: 3px ; cellspacing = 0px'>";
for($i=1;$i<=6;$i++)
{
echo "<tr>";
for ($s=1;$s<=5;$s++)
  {
  echo "<td>$i * $s = ".$i*$s."</td>";
  }
  echo "</tr>";
  }
  echo "</table>";
?>
