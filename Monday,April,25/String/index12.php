<!-- 
Write a PHP script to insert a string at the specified position in a given string. 
Original String: 'The brown fox'
Insert 'quick' between 'The' and 'brown'.
Expected Output: 'The quick brown fox'
-->

<?php
$orgString = 'The brown fox';
$newWord ='quick';
$insertPosition = 4;
$newString = substr_replace($orgString, $newWord.' ', $insertPosition, 0);
echo $newString."\n";
?>