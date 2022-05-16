<!--
4.	Write a PHP function to swap to variables?
Sample Input:  x = 12     y= 10
Expected Output: y=12   x=10 
-->

<?php
$s = 3;
$i = 7;
echo "\n Befor the swap--->  ". $s . ' , ' . $i;
list($s , $i) = array($i , $s);
echo "\n ____After the swap--->  ". $s . ' , ' . $i."\n";
?>