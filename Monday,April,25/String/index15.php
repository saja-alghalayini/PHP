<!-- 
15.	Write a PHP script to remove trailing dashes from a string. 
Original String: 'The quick brown fox jumps over the lazy dog---'
Expected Output: 'The quick brown fox jumps over the lazy dog'
-->

<?php
$string = 'The quick brown fox jumps over the lazy dog---';
echo rtrim($string, '-')."\n";
?>