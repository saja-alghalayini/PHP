<!--
Write a program which will count the "c" characters in the text "Orange Coding Academy". 
Sample Input: Orange Coding Academy
Expected Output: 2
-->

<?php
$txt="Saj SAja-z Pizza Waflle flake";
$search_Letter="a";
$count="0";
for($x="0"; $x< strlen($txt); $x++)
  { 
    if(substr($txt,$x,1)==$search_Letter)
    {
    $count = $count+1;
	 }
  }
echo $count."\n";
?>