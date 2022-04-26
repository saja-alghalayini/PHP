<!-- 
Write a PHP script to extract the file name from the URL. 

Sample Output: 'www.orange.com/index.php'
Expected Output: 'index.php'
-->

<!-- basename — Returns trailing name component of path -->
<!-- The substr() method returns a portion of the string -->
<!-- The strrchr() function finds the position of the last occurrence of a string within another string
, and returns all characters from this position to the end of the string. -->


<?php

$url='www.orange.com/index.php';
$FN=substr(strrchr($url,"/"),1);
echo $FN;
?>