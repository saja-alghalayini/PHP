<!-- 
Write a PHP script to calculate the sum of the two integers.
If the two values are the same, then calculate the triple of their sum.
Sample Input: [ firstInteger  =>  2 , secondInteger => 2]
Sample Output: ( 2 + 2 ) * 3 = 12
-->

<?php
function num($x, $y) 
{
    return $x == $y ? ($x + $y)*3 : $x + $y;
}
echo num(3, 2)."\n";
echo num(2, 2)."\n";
?>