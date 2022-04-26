<!-- 
Write a PHP script to get the last three characters from the string. 
Sample Output: 'info@orange.com'
Expected Output: 'com'
-->

<?php
$string = 'info@orange.com';
echo substr($string, -3)."\n";
?>