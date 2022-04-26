<!-- 
Write a PHP script splitting the following numeric string to be a date format. 
Sample Output: '085119'
Expected Output: 08:51:19
 -->

<?php 

$DATE = '085119';
echo date("H:i:s",(strtotime($DATE)))
?>