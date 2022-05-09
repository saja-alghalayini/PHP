<!-- 
Write a PHP script to remove comma(s) from the following numeric string.
Sample Output: '2,543.12'
Expected Output: 2543.12
-->


<?php

$string = "2,543.12";
$s = str_replace( ',', '', $string);
if( is_numeric($s))
  {
  echo $s."\n";
  }
?>