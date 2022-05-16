<!-- 
Write a PHP script to extract the username from the following email address. 
Sample Output: 'info@orange.com'
Expected Output: 'info'
-->

<?php

$email  =  'info@orange.com';
$username = strstr($email, '@', true);
echo $username."\n";
?>