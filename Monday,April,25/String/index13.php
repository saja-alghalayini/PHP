<!-- 
Write a PHP script to remove zeroes from the given number. 
Original String: '0000657022.24'
Expected Output: '65722.24'
-->

<?php
$s = '000065722.24';
$string = ltrim($s, '0');
echo $string."\n";
?>